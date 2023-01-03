<?php

namespace App\Service;

use App\Service\SvgGenerator;
use App\Service\LockupsConverter;
use App\Entity\Lockups;
use App\Service\Core;
use App\Entity\LockupFiles;
use App\Entity\LockupsFields;
use App\Entity\LockupTemplates;
use Doctrine\Persistence\ManagerRegistry;

class LockupsGenerator
{
    private $SvgGenerator;
    private $doctrine;
    private $lockupsConverter;
    private $core;

    public function __construct(SvgGenerator $SvgGenerator, ManagerRegistry $doctrine, LockupsConverter $lockupsConverter, Core $core)
    {
        $this->SvgGenerator = $SvgGenerator;
        $this->doctrine = $doctrine;
        $this->lockupsConverter = $lockupsConverter;
        $this->core = $core;
    }

    public function fetchLockupTemplates(int $id): ?array
    {
        $array = array();

        $lockup = $this->doctrine->getRepository(Lockups::class)->find($id);
        array_push($array, $lockup->getTemplate());

        if ($lockup->getTemplate()->getLinksTo() != null) {
            $lockupTemplate = $this->doctrine->getRepository(LockupTemplates::class)->find($lockup->getTemplate()->getLinksTo());
            array_push($array, $lockupTemplate);
        }

        return $array;
    }


    public function createPreview(int $id): bool
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        $lockupFields = $this->doctrine->getRepository(LockupsFields::class)->findBy(["lockup" => $id]);
        $array = $this->fetchLockupTemplates($id);
        foreach ($array as $template) {
            if ($template->getStyle() == "h") {
                $horizontal = $this->SvgGenerator->createLockup($template->getSlug(), $lockupFields, 'h', 'RGB', false, true);
                $lockups->setPreviewH($horizontal);
            } else if ($template->getStyle() == "v") {
                $vertical = $this->SvgGenerator->createLockup($template->getSlug(), $lockupFields, 'v', 'RGB', false, true);
                $lockups->setPreviewV($vertical);
            }
        }
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();
        return true;
    }

    public function generateLockups(int $id): string
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);

        $this->lockupsConverter->setLockup($lockups);

        // set status to generating
        $lockups->setGenerating(1);
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();

        $array = $this->fetchLockupTemplates($id);
        $lockupFields = $lockups->getLockupsFields();

        $styles = array('RGB', 'pms186cp', '4c', 'blk');

        // set the name
        // $lockups_name = $this->core->getLockupFileName($lockups);

        //remove the existing folder
        $this->lockupsConverter->deteleLockupsFolder();

        //remove existing files from db
        $delete_lockup_files = $lockups->getLockupFiles();

        foreach ($delete_lockup_files as $item) {
            $this->doctrine->getManager()->remove(($item));
        }
        $this->doctrine->getManager()->flush();

        //the actual process
        foreach ($array as $template) {
            if ($template->getSlug() == "v_social") { // only RGB for this one
                $styles = array('RGB');
            }
            foreach ($styles as $style) {
                $svgFile = $this->SvgGenerator->createLockup($template->getSlug(), $lockupFields, $template->getStyle(), $style, false);

                $this->lockupsConverter->saveSvg($lockups, $svgFile, $template->getStyle(), false, $style);

                if ($template->getSlug() != 'v_social') // no reverse for this style
                {
                    $svgFile = $this->SvgGenerator->createLockup($template->getSlug(), $lockupFields, $template->getStyle(), $style, true);
                    $this->lockupsConverter->saveSvg($lockups, $svgFile, $template->getStyle(), true, $style);
                }
            }
        }

        $this->lockupsConverter->createZip($lockups);

        $lockups->setGenerating(0);
        $lockups->setIsGenerated(1);
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();
        return "";
    }
}
