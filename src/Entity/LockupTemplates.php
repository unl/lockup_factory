<?php

namespace App\Entity;

use App\Repository\LockupTemplatesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupTemplatesRepository::class)]
class LockupTemplates
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 20)]
    private $style;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $image;

    #[ORM\Column(type: 'text', nullable: true)]
    private $svg;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $links_to;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $slug;

    #[ORM\ManyToOne(targetEntity: LockupTemplatesCategories::class, inversedBy: 'lockupTemplates')]
    #[ORM\JoinColumn(nullable: false)]
    private $category;

    #[ORM\OneToMany(mappedBy: 'LockupTemplates', targetEntity: TemplateFields::class)]
    private $templateFields;

    #[ORM\Column(type: 'text', nullable: true)]
    private $preview;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $ListingOrder;

    public function __construct()
    {
        $this->template = new ArrayCollection();
        $this->templateFields = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSvg(): ?string
    {
        return $this->svg;
    }

    public function setSvg(?string $svg): self
    {
        $this->svg = $svg;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLinksTo(): ?int
    {
        return $this->links_to;
    }

    public function setLinksTo(?int $links_to): self
    {
        $this->links_to = $links_to;

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

    public function getCategory(): ?LockupTemplatesCategories
    {
        return $this->category;
    }

    public function setCategory(?LockupTemplatesCategories $category): self
    {
        $this->category = $category;

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
            $templateField->setLockupTemplates($this);
        }

        return $this;
    }

    public function removeTemplateField(TemplateFields $templateField): self
    {
        if ($this->templateFields->removeElement($templateField)) {
            // set the owning side to null (unless already changed)
            if ($templateField->getLockupTemplates() === $this) {
                $templateField->setLockupTemplates(null);
            }
        }

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    public function getListingOrder(): ?int
    {
        return $this->ListingOrder;
    }

    public function setListingOrder(?int $ListingOrder): self
    {
        $this->ListingOrder = $ListingOrder;

        return $this;
    }
}
