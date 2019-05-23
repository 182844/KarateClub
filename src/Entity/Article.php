<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Onurb\Doctrine\ORMMetadataGrapher\Mapping as Grapher;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @Vich\Uploadable
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *       min = 10,
     *       max = 255,
     *       minMessage = "Pas assez de caractères!",
     *       maxMessage = "Trop long!"
     * )
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;


    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="article_picture", fileNameProperty="imageName")
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */
      /**
     * @Grapher\IsDisplayedMethod()
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

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }


      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getId(): ?int
    {
        return $this->id;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

      /**
     * @Grapher\IsDisplayedMethod()
     */
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
