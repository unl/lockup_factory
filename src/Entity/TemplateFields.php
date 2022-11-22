<?php

namespace App\Entity;

use App\Repository\TemplateFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemplateFieldsRepository::class)]
class TemplateFields
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: LockupTemplates::class, inversedBy: 'templateFields')]
    #[ORM\JoinColumn(nullable: false)]
    private $LockupTemplates;

    #[ORM\ManyToOne(targetEntity: LockupTemplatesFields::class, inversedBy: 'templateFields')]
    #[ORM\JoinColumn(nullable: false)]
    private $LockupFields;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLockupTemplates(): ?LockupTemplates
    {
        return $this->LockupTemplates;
    }

    public function setLockupTemplates(?LockupTemplates $LockupTemplates): self
    {
        $this->LockupTemplates = $LockupTemplates;

        return $this;
    }

    public function getLockupFields(): ?LockupTemplatesFields
    {
        return $this->LockupFields;
    }

    public function setLockupFields(?LockupTemplatesFields $LockupFields): self
    {
        $this->LockupFields = $LockupFields;

        return $this;
    }
}
