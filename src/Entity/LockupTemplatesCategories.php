<?php

namespace App\Entity;

use App\Repository\LockupTemplatesCategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupTemplatesCategoriesRepository::class)]
class LockupTemplatesCategories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $name;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $slug;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: LockupTemplates::class, orphanRemoval: true)]
    private $lockupTemplates;

    public function __construct()
    {
        $this->lockupTemplates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, LockupTemplates>
     */
    public function getLockupTemplates(): Collection
    {
        return $this->lockupTemplates;
    }

    public function addLockupTemplate(LockupTemplates $lockupTemplate): self
    {
        if (!$this->lockupTemplates->contains($lockupTemplate)) {
            $this->lockupTemplates[] = $lockupTemplate;
            $lockupTemplate->setCategory($this);
        }

        return $this;
    }

    public function removeLockupTemplate(LockupTemplates $lockupTemplate): self
    {
        if ($this->lockupTemplates->removeElement($lockupTemplate)) {
            // set the owning side to null (unless already changed)
            if ($lockupTemplate->getCategory() === $this) {
                $lockupTemplate->setCategory(null);
            }
        }

        return $this;
    }
}
