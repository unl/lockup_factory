<?php

namespace App\Entity;

use App\Repository\LockupsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LockupsRepository::class)]
class Lockups
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

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
    private $name;

    #[ORM\Column(type: 'integer', options:["default"=> 0])]
    private $Generating;

    #[ORM\Column(type: 'integer', options:["default"=> 0])]
    private $isGenerated;

    #[ORM\Column(type: 'integer', options:["default"=> 0])]
    private $CreativeStatus;

    #[ORM\Column(type: 'integer', options:["default"=> 0])]
    private $CommunicatorStatus;

    #[ORM\OneToMany(mappedBy: 'lockup', targetEntity: LockupFiles::class, orphanRemoval: true)]
    private $lockupFiles;

    #[ORM\OneToMany(mappedBy: 'lockup', targetEntity: LockupsFields::class, orphanRemoval: true)]
    private $lockupsFields;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zipUrl;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $public;

    #[ORM\OneToMany(mappedBy: 'Lockup', targetEntity: Feedbacks::class, orphanRemoval: true)]
    private $feedbacks;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    private $approver;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Organization;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $DateCreated;

    public function __construct()
    {
        $this->lockupFiles = new ArrayCollection();
        $this->feedbacks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getCreativeStatus(): ?int
    {
        return $this->CreativeStatus;
    }

    public function setCreativeStatus(?int $CreativeStatus): self
    {
        $this->CreativeStatus = $CreativeStatus;

        return $this;
    }

    public function getCommunicatorStatus(): ?int
    {
        return $this->CommunicatorStatus;
    }

    public function setCommunicatorStatus(?int $CommunicatorStatus): self
    {
        $this->CommunicatorStatus = $CommunicatorStatus;

        return $this;
    }

    /**
     * @return Collection<int, LockupFiles>
     */
    public function getLockupFiles(): Collection
    {
        return $this->lockupFiles;
    }

    public function addLockupFile(LockupFiles $lockupFile): self
    {
        if (!$this->lockupFiles->contains($lockupFile)) {
            $this->lockupFiles[] = $lockupFile;
            $lockupFile->setLockup($this);
        }

        return $this;
    }

    public function removeLockupFile(LockupFiles $lockupFile): self
    {
        if ($this->lockupFiles->removeElement($lockupFile)) {
            // set the owning side to null (unless already changed)
            if ($lockupFile->getLockup() === $this) {
                $lockupFile->setLockup(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, LockupsFields>
     */
    public function getLockupsFields(): Collection
    {
        return $this->lockupsFields;
    }

    public function addLockupsFields(LockupsFields $lockupsFields): self
    {
        if (!$this->lockupsFields->contains($lockupsFields)) {
            $this->lockupsFields[] = $lockupsFields;
            $lockupsFields->setLockup($this);
        }

        return $this;
    }

    public function removeLockupsFields(LockupsFields $lockupsFields): self
    {
        if ($this->lockupsFields->removeElement($lockupsFields)) {
            // set the owning side to null (unless already changed)
            if ($lockupsFields->getLockup() === $this) {
                $lockupsFields->setLockup(null);
            }
        }

        return $this;
    }

    public function getZipUrl(): ?string
    {
        return $this->zipUrl;
    }

    public function setZipUrl(?string $zipUrl): self
    {
        $this->zipUrl = $zipUrl;

        return $this;
    }

    public function getPublic(): ?int
    {
        return $this->public;
    }

    public function setPublic(?int $public): self
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @return Collection<int, Feedbacks>
     */
    public function getFeedbacks(): Collection
    {
        return $this->feedbacks;
    }

    public function addFeedback(Feedbacks $feedback): self
    {
        if (!$this->feedbacks->contains($feedback)) {
            $this->feedbacks[] = $feedback;
            $feedback->setLockup($this);
        }

        return $this;
    }

    public function removeFeedback(Feedbacks $feedback): self
    {
        if ($this->feedbacks->removeElement($feedback)) {
            // set the owning side to null (unless already changed)
            if ($feedback->getLockup() === $this) {
                $feedback->setLockup(null);
            }
        }

        return $this;
    }

    public function getApprover(): ?Users
    {
        return $this->approver;
    }

    public function setApprover(?Users $approver): self
    {
        $this->approver = $approver;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->Organization;
    }

    public function setOrganization(?string $Organization): self
    {
        $this->Organization = $Organization;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->DateCreated;
    }

    public function setDateCreated(\DateTimeInterface $DateCreated): self
    {
        $this->DateCreated = $DateCreated;

        return $this;
    }
}
