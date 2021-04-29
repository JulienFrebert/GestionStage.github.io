<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeFormation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle_Formation", type="string", length=38, nullable=true)
     */
    private $libelleFormation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entreprise", mappedBy="codePrefererFormation")
     */
    private $codePrefererEntreprise;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codePrefererEntreprise = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodeFormation(): ?int
    {
        return $this->codeFormation;
    }

    public function getLibelleFormation(): ?string
    {
        return $this->libelleFormation;
    }

    public function setLibelleFormation(?string $libelleFormation): self
    {
        $this->libelleFormation = $libelleFormation;

        return $this;
    }

    /**
     * @return Collection|Entreprise[]
     */
    public function getCodePrefererEntreprise(): Collection
    {
        return $this->codePrefererEntreprise;
    }

    public function addCodePrefererEntreprise(Entreprise $codePrefererEntreprise): self
    {
        if (!$this->codePrefererEntreprise->contains($codePrefererEntreprise)) {
            $this->codePrefererEntreprise[] = $codePrefererEntreprise;
            $codePrefererEntreprise->addCodePrefererFormation($this);
        }

        return $this;
    }

    public function removeCodePrefererEntreprise(Entreprise $codePrefererEntreprise): self
    {
        if ($this->codePrefererEntreprise->removeElement($codePrefererEntreprise)) {
            $codePrefererEntreprise->removeCodePrefererFormation($this);
        }

        return $this;
    }

}
