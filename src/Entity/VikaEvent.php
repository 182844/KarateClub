<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\VikaEventRepository")
 * @Vich\Uploadable
 */
class VikaEvent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $capacity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdEv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="vikaEvents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Registration", mappedBy="vikaEvent")
     */
    private $registrations;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="vikaEvent_picture", fileNameProperty="imageName")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedImage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PriceGrid", mappedBy="vikaEvent", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\OrderBy({"public" = "ASC"})
     */
    private $priceGrid;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $published;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inscription;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $easyInscription;

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedImage = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function __construct()
    {
        $this->registrations = new ArrayCollection();
        $this->createdEv = new \DateTime();
        $this->priceGrid = new ArrayCollection();
        $this->published = false;
        $this->inscription = true;
        $this->easyInscription = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getCreatedEv(): ?\DateTimeInterface
    {
        return $this->createdEv;
    }

    public function setCreatedEv(\DateTimeInterface $createdEv): self
    {
        $this->createdEv = $createdEv;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Registration[]
     */
    public function getRegistrations(): Collection
    {
        return $this->registrations;
    }

    public function addRegistration(Registration $registration): self
    {
        if (!$this->registrations->contains($registration)) {
            $this->registrations[] = $registration;
            $registration->setVikaEvent($this);
        }

        return $this;
    }

    public function removeRegistration(Registration $registration): self
    {
        if ($this->registrations->contains($registration)) {
            $this->registrations->removeElement($registration);
            // set the owning side to null (unless already changed)
            if ($registration->getVikaEvent() === $this) {
                $registration->setVikaEvent(null);
            }
        }

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection|PriceGrid[]
     */
    public function getPriceGrid(): Collection
    {
        return $this->priceGrid;
    }

    public function addPriceGrid(PriceGrid $priceGrid): self
    {
        if (!$this->priceGrid->contains($priceGrid)) {
            $this->priceGrid[] = $priceGrid;
            $priceGrid->setVikaEvent($this);
        }

        return $this;
    }

    public function removePriceGrid(PriceGrid $priceGrid): self
    {
        if ($this->priceGrid->contains($priceGrid)) {
            $this->priceGrid->removeElement($priceGrid);
            // set the owning side to null (unless already changed)
            if ($priceGrid->getVikaEvent() === $this) {
                $priceGrid->setVikaEvent(null);
            }
        }

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }


    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(?bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getInscription(): ?bool
    {
        return $this->inscription;
    }

    public function setInscription(?bool $inscription): self
    {
        $this->inscription = $inscription;

        return $this;
    }

    public function getEasyInscription(): ?bool
    {
        return $this->easyInscription;
    }

    public function setEasyInscription(?bool $easyInscription): self
    {
        $this->easyInscription = $easyInscription;

        return $this;
    }

}
