<?php

namespace App\Entity;

use App\Repository\LockupTemplatesFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupTemplatesFieldsRepository::class)]
class LockupTemplatesFields
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 30, nullable: true)]
    private $type;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $length;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $slug;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $Placeholder;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $Value;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Uppercase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPlaceholder(): ?string
    {
        return $this->Placeholder;
    }

    public function setPlaceholder(?string $Placeholder): self
    {
        $this->Placeholder = $Placeholder;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(?string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getUppercase(): ?int
    {
        return $this->Uppercase;
    }

    public function setUppercase(?int $Uppercase): self
    {
        $this->Uppercase = $Uppercase;

        return $this;
    }
}
