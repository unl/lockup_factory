<?php

namespace App\Service;

use App\Service\SvgGenerator;
use App\Service\LockupsConverter;
use App\Entity\Lockups;
use App\Entity\LockupsFields;
use App\Entity\LockupTemplates;
use Doctrine\Persistence\ManagerRegistry;

class LockupsGenerator
{
    private $SvgGenerator;
    private $doctrine;
    private $lockupsConverter;

    public function __construct(SvgGenerator $SvgGenerator, ManagerRegistry $doctrine, LockupsConverter $lockupsConverter)
    {
        $this->SvgGenerator = $SvgGenerator;
        $this->doctrine = $doctrine;
        $this->lockupsConverter = $lockupsConverter;
    }

    public function fetchLockupDetails(int $id): ?array
    {
        $array = array(
            "fields" => "",
            "h" => null,
            "v" => null,
            "template" => null
        );

        $lockup = $this->doctrine->getRepository(Lockups::class)->find($id);
        if ($lockup->getTemplate()->getStyle() == "h") {
            $array["h"] = $lockup->getTemplate();
            $array["template"] = $lockup->getTemplate()->getSlug();
        } else {
            $array["template"] = $lockup->getTemplate()->getSlug();
            $array["v"] = $lockup->getTemplate();
        }

        if ($lockup->getTemplate()->getLinksTo() != null) {
            $lockupTemplate = $this->doctrine->getRepository(LockupTemplates::class)->find($lockup->getTemplate()->getLinksTo());

            if ($lockupTemplate->getStyle() == "h") {
                $array["h"] = $lockupTemplate;
            } else {
                $array["v"] = $lockupTemplate;
            }
        }

        $lockupFields = $this->doctrine->getRepository(LockupsFields::class)->findBy(['lockup' => $id]);
        $array["fields"] = $lockupFields;

        return $array;
    }

    public function createPreview(int $id): string
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        $array = $this->fetchLockupDetails($id);
        if ($array["h"] != null) {
            $horizontal = $this->SvgGenerator->createLockup($array["h"]->getSlug(), $array['fields'], 'h', 'RGB', false, true);
            // $this->lockupsConverter->saveSvg($horizontal, "Nh_". $lockups->getId());
            $lockups->setPreviewH($horizontal);
        }
        if ($array["v"] != null) {
            $vertical = $this->SvgGenerator->createLockup($array["v"]->getSlug(), $array['fields'], 'v', 'RGB', false, true);
            // $this->lockupsConverter->saveSvg($vertical, "Nv_". $lockups->getId());

            $lockups->setPreviewV($vertical);
        }
        // $this->generateLockups($id);
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();
        return "";
    }

    public function generateLockups(int $id): string
    {
        $lockups = $this->doctrine->getRepository(Lockups::class)->find($id);
        // set status to generating
        $lockups->setGenerating(1);
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();

        $array = $this->fetchLockupDetails($id);

        $orients = array('h', 'v');
        $styles = array('RGB', 'pms186cp', '4c', 'blk');
        if ($array["template"] == "v_social") {
            $styles = array('RGB');
        }
        // set the name
        if ($lockups->getInstitution() != "")
        {
            $lockups_name = $lockups->getInstitution();
        } else {
            $lockups_name = $lockups->getDepartment();

        }
        $lockups_name = str_replace(" ", "_", $lockups_name);
        $lockups_name = $lockups_name . "__";

        //remove the existing folder
        $this->lockupsConverter->deteleFolder($lockups_name);

        //the actual process
        foreach ($orients as $orient) {
            if (!(($array["template"] == 'v_acronym_2_subject' || $array["template"] == 'v_extension_4h' || $array["template"] == 'v_social') && $orient == 'h')) // no horizontal for these styles
            {
                foreach ($styles as $style) {
                    $svgFile = $this->SvgGenerator->createLockup($array['template'], $array['fields'], $orient, $style, false);
                    $this->lockupsConverter->saveSvg($lockups, $svgFile, $lockups_name , $orient, false, $style);

                    if ($array['template'] != 'v_social') // no reverse for this style
                    {
                    $svgFile = $this->SvgGenerator->createLockup($array['template'], $array['fields'], $orient, $style, true);
                    $this->lockupsConverter->saveSvg($lockups, $svgFile, $lockups_name , $orient, true, $style);
                    }
                }
            }
        }

        $lockups->setGenerating(0);
        $lockups->setIsGenerated(1);
        $this->doctrine->getManager()->persist($lockups);
        $this->doctrine->getManager()->flush();

        $this->lockupsConverter->createZip($lockups->getId(), $lockups_name);
        return "";
    }
}
