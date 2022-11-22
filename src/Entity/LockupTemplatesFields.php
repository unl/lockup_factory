<?php

namespace App\Entity;

use App\Repository\LockupTemplatesFieldsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $placeholder;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $value;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $uppercase;

    #[ORM\OneToMany(mappedBy: 'LockupFields', targetEntity: TemplateFields::class)]
    private $templateFields;

    public function __construct()
    {
        $this->templateFields = new ArrayCollection();
    }

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
        return $this->placeholder;
    }

    public function setPlaceholder(?string $placeholder): self
    {
        $this->placeholder = $placeholder;

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

    public function getUppercase(): ?int
    {
        return $this->uppercase;
    }

    public function setUppercase(?int $uppercase): self
    {
        $this->uppercase = $uppercase;

        return $this;
    }

    /**
     * @return Collection<int, TemplateFields>
     */
    public function getTemplateFields(): Collection
    {
        return $this->templateFields;
    }

    public function addTemplateField(TemplateFields $templateField): self
    {
        if (!$this->templateFields->contains($templateField)) {
            $this->templateFields[] = $templateField;
            $templateField->setLockupFields($this);
        }

        return $this;
    }

    public function removeTemplateField(TemplateFields $templateField): self
    {
        if ($this->templateFields->removeElement($templateField)) {
            // set the owning side to null (unless already changed)
            if ($templateField->getLockupFields() === $this) {
                $templateField->setLockupFields(null);
            }
        }

        return $this;
    }
}
