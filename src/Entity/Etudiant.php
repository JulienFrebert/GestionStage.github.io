<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Etudiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Etudiant", type="string", length=38, nullable=false)
     */
    private $nomEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomDeNaissance_Etudiant", type="string", length=38, nullable=true)
     */
    private $nomdenaissanceEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Etudiant", type="string", length=38, nullable=false)
     */
    private $prenomEtudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDeNaissance_Etudiant", type="date", nullable=false)
     */
    private $datedenaissanceEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal_Etudiant", type="string", length=5, nullable=false, options={"fixed"=true})
     */
    private $codepostalEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville_Etudiant", type="string", length=38, nullable=false)
     */
    private $villeEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Etudiant", type="string", length=38, nullable=false)
     */
    private $adresseEtudiant;

    public function getCodeEtudiant(): ?int
    {
        return $this->codeEtudiant;
    }

    public function getNomEtudiant(): ?string
    {
        return $this->nomEtudiant;
    }

    public function setNomEtudiant(string $nomEtudiant): self
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    public function getNomdenaissanceEtudiant(): ?string
    {
        return $this->nomdenaissanceEtudiant;
    }

    public function setNomdenaissanceEtudiant(?string $nomdenaissanceEtudiant): self
    {
        $this->nomdenaissanceEtudiant = $nomdenaissanceEtudiant;

        return $this;
    }

    public function getPrenomEtudiant(): ?string
    {
        return $this->prenomEtudiant;
    }

    public function setPrenomEtudiant(string $prenomEtudiant): self
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    public function getDatedenaissanceEtudiant(): ?\DateTimeInterface
    {
        return $this->datedenaissanceEtudiant;
    }

    public function setDatedenaissanceEtudiant(\DateTimeInterface $datedenaissanceEtudiant): self
    {
        $this->datedenaissanceEtudiant = $datedenaissanceEtudiant;

        return $this;
    }

    public function getCodepostalEtudiant(): ?string
    {
        return $this->codepostalEtudiant;
    }

    public function setCodepostalEtudiant(string $codepostalEtudiant): self
    {
        $this->codepostalEtudiant = $codepostalEtudiant;

        return $this;
    }

    public function getVilleEtudiant(): ?string
    {
        return $this->villeEtudiant;
    }

    public function setVilleEtudiant(string $villeEtudiant): self
    {
        $this->villeEtudiant = $villeEtudiant;

        return $this;
    }

    public function getAdresseEtudiant(): ?string
    {
        return $this->adresseEtudiant;
    }

    public function setAdresseEtudiant(string $adresseEtudiant): self
    {
        $this->adresseEtudiant = $adresseEtudiant;

        return $this;
    }


}
