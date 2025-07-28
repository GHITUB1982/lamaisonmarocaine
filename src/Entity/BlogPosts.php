<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BlogPostsRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: BlogPostsRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['slug'], message: 'Ce slug existe déjà.')]
class BlogPosts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[Assert\NotBlank(message: 'Le slug est obligatoire.')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le slug ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[Assert\NotBlank(message: 'Le contenu est obligatoire.')]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[Assert\NotBlank(message: 'L\'extrait est obligatoire.')]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $excerpt = null;

    #[Assert\Length(
        max: 255,
        maxMessage: 'Le chemin de l\'image ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[ORM\Column(name: 'featured_image', length: 255, nullable: true)]
    private ?string $featuredImage = null;

    #[Assert\Length(
        max: 60,
        maxMessage: 'Le meta title ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[ORM\Column(length: 60, nullable: true)]
    private ?string $metaTitle = null;

    #[Assert\Choice(
        choices: ['draft', 'published', 'archived'],
        message: 'Le statut doit être draft, published ou archived.'
    )]
    #[ORM\Column(length: 20)]
    private string $status = 'draft';

    #[Assert\Length(
        max: 160,
        maxMessage: 'La meta description ne peut pas dépasser {{ limit }} caractères.'
    )]
    #[ORM\Column(length: 160, nullable: true)]
    private ?string $metaDescription = null;

    #[ORM\Column(name: 'views_count', type: 'integer', options: ['default' => 0])]
    private int $viewsCount = 0;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'author_id', referencedColumnName: 'id', nullable: false)]
    private ?User $author = null;

    #[ORM\ManyToOne(targetEntity: Category::class)]
    #[ORM\JoinColumn(name: 'category_id', referencedColumnName: 'id', nullable: true)]
    private ?Category $category = null;

    #[ORM\Column(name: 'created_at', type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(name: 'updated_at', type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updatedAt = null;

   #[ORM\Column]
    private ?bool $isHomepage = null;


        // Getters and Setters

        public function getId(): ?int
        {
            return $this->id;
        }

        public function getTitle(): ?string
        {
            return $this->title;
        }

        public function setTitle(string $title): static
        {
            $this->title = $title;
            return $this;
        }

        public function getSlug(): ?string
        {
            return $this->slug;
        }

        public function setSlug(string $slug): static
        {
            $this->slug = $slug;
            return $this;
        }

        public function getContent(): ?string
        {
            return $this->content;
        }

        public function setContent(string $content): static
        {
            $this->content = $content;
            return $this;
        }

        public function getExcerpt(): ?string
        {
            return $this->excerpt;
        }

        public function setExcerpt(string $excerpt): static
        {
            $this->excerpt = $excerpt;
            return $this;
        }

        public function getFeaturedImage(): ?string
        {
            return $this->featuredImage;
        }

        public function setFeaturedImage(?string $featuredImage): static
        {
            $this->featuredImage = $featuredImage;
            return $this;
        }

        public function getMetaTitle(): ?string
        {
            return $this->metaTitle;
        }

        public function setMetaTitle(?string $metaTitle): static
        {
            $this->metaTitle = $metaTitle;
            return $this;
        }

        public function getStatus(): string
        {
            return $this->status;
        }

        public function setStatus(string $status): static
        {
            $this->status = $status;
            return $this;
        }

        public function getMetaDescription(): ?string
        {
            return $this->metaDescription;
        }

        public function setMetaDescription(?string $metaDescription): static
        {
            $this->metaDescription = $metaDescription;
            return $this;
        }

        public function getViewsCount(): int
        {
            return $this->viewsCount;
        }

        public function incrementViewsCount(): self
        {
            $this->viewsCount++;
            return $this;
        }

        public function getAuthor(): ?User
        {
            return $this->author;
        }

        public function setAuthor(?User $author): static
        {
            $this->author = $author;
            return $this;
        }

        public function getCategory(): ?Category
        {
            return $this->category;
        }

        public function setCategory(?Category $category): static
        {
            $this->category = $category;
            return $this;
        }

        public function getCreatedAt(): ?\DateTimeImmutable
        {
            return $this->createdAt;
        }

        public function getUpdatedAt(): ?\DateTimeImmutable
        {
            return $this->updatedAt;
        }

        #[ORM\PrePersist]
        public function setCreatedAtValue(): void
        {
            $this->createdAt = new \DateTimeImmutable();
            $this->updatedAt = new \DateTimeImmutable();
        }

        #[ORM\PreUpdate]
        public function setUpdatedAtValue(): void
        {
            $this->updatedAt = new \DateTimeImmutable();
        }

          public function isHomepage(): ?bool
    {
        return $this->isHomepage;
    }

    public function setIsHomepage(bool $isHomepage): static
    {
        $this->isHomepage = $isHomepage;

        return $this;
    }
    }