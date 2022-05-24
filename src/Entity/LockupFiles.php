<?php

namespace App\Entity;

use App\Repository\LockupFilesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupFilesRepository::class)]
class LockupFiles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $fileName;

    #[ORM\Column(type: 'string', length: 255)]
    private $url;

    #[ORM\ManyToOne(targetEntity: Lockups::class, inversedBy: 'lockupFiles')]
    #[ORM\JoinColumn(nullable: false)]
    private $lockup;

    #[ORM\Column(type: 'string', length: 100)]
    private $style;

    #[ORM\ManyToOne(targetEntity: LockupTemplates::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $template;

    #[ORM\Column(type: 'string', length: 100)]
    private $orient;

    #[ORM\Column(type: 'string', length: 100)]
    private $format;

    #[ORM\Column(type: 'string', length: 255)]
    private $directory;

    #[ORM\Column(type: 'string', length: 255)]
    private $pathName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLockup(): ?Lockups
    {
        return $this->lockup;
    }

    public function setLockup(?Lockups $lockup): self
    {
        $this->lockup = $lockup;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getTemplate(): ?LockupTemplates
    {
        return $this->template;
    }

    public function setTemplate(?LockupTemplates $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getOrient(): ?string
    {
        return $this->orient;
    }

    public function setOrient(string $orient): self
    {
        $this->orient = $orient;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getDirectory(): ?string
    {
        return $this->directory;
    }

    public function setDirectory(string $directory): self
    {
        $this->directory = $directory;

        return $this;
    }

    public function getPathName(): ?string
    {
        return $this->pathName;
    }

    public function setPathName(string $pathName): self
    {
        $this->pathName = $pathName;

        return $this;
    }
}
