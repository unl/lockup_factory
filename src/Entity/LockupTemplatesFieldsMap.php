<?php

namespace App\Entity;

use App\Repository\LockupTemplatesFieldsMapRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupTemplatesFieldsMapRepository::class)]
class LockupTemplatesFieldsMap
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: LockupTemplates::class)]
    private $lockup_template;

    #[ORM\ManyToOne(targetEntity: LockupTemplatesFields::class)]
    private $lockup_fields;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLockupTemplate(): ?LockupTemplates
    {
        return $this->lockup_template;
    }

    public function setLockupTemplate(?LockupTemplates $lockup_template): self
    {
        $this->lockup_template = $lockup_template;

        return $this;
    }

    public function getLockupFields(): ?LockupTemplatesFields
    {
        return $this->lockup_fields;
    }

    public function setLockupFields(?LockupTemplatesFields $lockup_fields): self
    {
        $this->lockup_fields = $lockup_fields;

        return $this;
    }
}
