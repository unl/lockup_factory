<?php

namespace App\Entity;

use App\Repository\LockupsFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupsFieldsRepository::class)]
class LockupsFields
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Lockups::class)]
    private $lockup;

    #[ORM\ManyToOne(targetEntity: LockupTemplatesFields::class)]
    private $fields;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $value;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFields(): ?LockupTemplatesFields
    {
        return $this->fields;
    }

    public function setFields(?LockupTemplatesFields $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
