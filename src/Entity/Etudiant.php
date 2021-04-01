<?php

namespace App\Entity;

use App\Repository\EtudiantType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", indexes={@ORM\Index(name="FK_Etudiant_Formation", columns={"Formation_Etudiant"})})
 * @ORM\Entity(repositoryClass=EtudiantType::class)
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
     * @var string|null
     *
     * @ORM\Column(name="Nom_Etudiant", type="string", length=38, nullable=true)
     */
    private $nomEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomDeNaissance_Etudiant", type="string", length=38, nullable=true)
     */
    private $nomdenaissanceEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom_Etudiant", type="string", length=38, nullable=true)
     */
    private $prenomEtudiant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateDeNaissance_Etudiant", type="date", nullable=true)
     */
    private $datedenaissanceEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodePostal_Etudiant", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $codepostalEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ville_Etudiant", type="string", length=38, nullable=true)
     */
    private $villeEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_Etudiant", type="string", length=38, nullable=true)
     */
    private $adresseEtudiant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Formation_Etudiant", type="integer", nullable=true)
     */
    private $formationEtudiant;

    public function getCodeEtudiant(): ?int
    {
        return $this->codeEtudiant;
    }

    public function getNomEtudiant(): ?string
    {
        return $this->nomEtudiant;
    }

    public function setNomEtudiant(?string $nomEtudiant): self
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

    public function setPrenomEtudiant(?string $prenomEtudiant): self
    {
        $this->prenomEtudiant = $prenomEtudiant;

        return $this;
    }

    public function getDatedenaissanceEtudiant(): ?\DateTimeInterface
    {
        return $this->datedenaissanceEtudiant;
    }

    public function setDatedenaissanceEtudiant(?\DateTimeInterface $datedenaissanceEtudiant): self
    {
        $this->datedenaissanceEtudiant = $datedenaissanceEtudiant;

        return $this;
    }

    public function getCodepostalEtudiant(): ?string
    {
        return $this->codepostalEtudiant;
    }

    public function setCodepostalEtudiant(?string $codepostalEtudiant): self
    {
        $this->codepostalEtudiant = $codepostalEtudiant;

        return $this;
    }

    public function getVilleEtudiant(): ?string
    {
        return $this->villeEtudiant;
    }

    public function setVilleEtudiant(?string $villeEtudiant): self
    {
        $this->villeEtudiant = $villeEtudiant;

        return $this;
    }

    public function getAdresseEtudiant(): ?string
    {
        return $this->adresseEtudiant;
    }

    public function setAdresseEtudiant(?string $adresseEtudiant): self
    {
        $this->adresseEtudiant = $adresseEtudiant;

        return $this;
    }

    public function getFormationEtudiant(): ?int
    {
        return $this->formationEtudiant;
    }

    public function setFormationEtudiant(?int $formationEtudiant): self
    {
        $this->formationEtudiant = $formationEtudiant;

        return $this;
    }


}
