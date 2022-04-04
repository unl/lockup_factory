<?php

namespace App\Entity;

use App\Repository\LockupsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupsRepository::class)]
class Lockups
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $approver;

    #[ORM\Column(type: 'integer')]
    private $status;

    #[ORM\ManyToOne(targetEntity: LockupTemplates::class)]
    #[ORM\JoinColumn(nullable: false, referencedColumnName:"id")]
    private $template;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    private $user;

    #[ORM\Column(type: 'text', nullable: true)]
    private $PreviewH;

    #[ORM\Column(type: 'text', nullable: true)]
    private $PreviewV;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $institution;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $department;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Generating;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $isGenerated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprover(): ?int
    {
        return $this->approver;
    }

    public function setApprover(int $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPreviewH(): ?string
    {
        return $this->PreviewH;
    }

    public function setPreviewH(?string $PreviewH): self
    {
        $this->PreviewH = $PreviewH;

        return $this;
    }

    public function getPreviewV(): ?string
    {
        return $this->PreviewV;
    }

    public function setPreviewV(?string $PreviewV): self
    {
        $this->PreviewV = $PreviewV;

        return $this;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(?string $institution): self
    {
        $this->institution = $institution;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getGenerating(): ?int
    {
        return $this->Generating;
    }

    public function setGenerating(?int $Generating): self
    {
        $this->Generating = $Generating;

        return $this;
    }

    public function getIsGenerated(): ?int
    {
        return $this->isGenerated;
    }

    public function setIsGenerated(?int $isGenerated): self
    {
        $this->isGenerated = $isGenerated;

        return $this;
    }
}