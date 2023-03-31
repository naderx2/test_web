<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $amount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $discount = null;

    #[ORM\Column(length: 255,unique: true)]
    private ?string $item = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $itemDescription = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unitCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unitDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unitPrice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vatAmount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $VATPercentage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $VATAmount = null;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: ArticleCommande::class)]
    private Collection $articleCommandes;

    public function __construct()
    {
        $this->articleCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

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

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getItem(): ?string
    {
        return $this->item;
    }

    public function setItem(string $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }

    public function setItemDescription(?string $itemDescription): self
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnitCode(): ?string
    {
        return $this->unitCode;
    }

    public function setUnitCode(?string $unitCode): self
    {
        $this->unitCode = $unitCode;

        return $this;
    }

    public function getUnitDescription(): ?string
    {
        return $this->unitDescription;
    }

    public function setUnitDescription(?string $unitDescription): self
    {
        $this->unitDescription = $unitDescription;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getVatAmount(): ?string
    {
        return $this->vatAmount;
    }

    public function setVatAmount(?string $vatAmount): self
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }

    public function getVATPercentage(): ?string
    {
        return $this->VATPercentage;
    }

    public function setVATPercentage(?string $VATPercentage): self
    {
        $this->VATPercentage = $VATPercentage;

        return $this;
    }

    /**
     * @return Collection<int, ArticleCommande>
     */
    public function getArticleCommandes(): Collection
    {
        return $this->articleCommandes;
    }

    public function addArticleCommande(ArticleCommande $articleCommande): self
    {
        if (!$this->articleCommandes->contains($articleCommande)) {
            $this->articleCommandes->add($articleCommande);
            $articleCommande->setArticle($this);
        }

        return $this;
    }

    public function removeArticleCommande(ArticleCommande $articleCommande): self
    {
        if ($this->articleCommandes->removeElement($articleCommande)) {
            // set the owning side to null (unless already changed)
            if ($articleCommande->getArticle() === $this) {
                $articleCommande->setArticle(null);
            }
        }

        return $this;
    }
}
