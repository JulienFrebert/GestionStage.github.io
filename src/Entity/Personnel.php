<?php

namespace App\Entity;

use App\Repository\PersonnelType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel", indexes={@ORM\Index(name="FK_Personnel_Entreprise", columns={"Entreprise_Personnel"}), @ORM\Index(name="FK_Personnel_Position", columns={"Position_Personnel"})})
 * @ORM\Entity(repositoryClass=PersonnelType::class)
 */
class Personnel
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Personnel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Personnel", type="string", length=38, nullable=true)
     */
    private $nomPersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom_Personnel", type="string", length=38, nullable=true)
     */
    private $prenomPersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Personnel", type="string", length=38, nullable=true)
     */
    private $emailPersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone1_Personnel", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephone1Personnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone2_Personnel", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephone2Personnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone3_Personnel", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephone3Personnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Personnel", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $faxPersonnel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Position_Personnel", type="integer", nullable=true)
     */
    private $positionPersonnel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Entreprise_Personnel", type="integer", nullable=true)
     */
    private $entreprisePersonnel;

    public function getCodePersonnel(): ?int
    {
        return $this->codePersonnel;
    }

    public function getNomPersonnel(): ?string
    {
        return $this->nomPersonnel;
    }

    public function setNomPersonnel(?string $nomPersonnel): self
    {
        $this->nomPersonnel = $nomPersonnel;

        return $this;
    }

    public function getPrenomPersonnel(): ?string
    {
        return $this->prenomPersonnel;
    }

    public function setPrenomPersonnel(?string $prenomPersonnel): self
    {
        $this->prenomPersonnel = $prenomPersonnel;

        return $this;
    }

    public function getEmailPersonnel(): ?string
    {
        return $this->emailPersonnel;
    }

    public function setEmailPersonnel(?string $emailPersonnel): self
    {
        $this->emailPersonnel = $emailPersonnel;

        return $this;
    }

    public function getTelephone1Personnel(): ?string
    {
        return $this->telephone1Personnel;
    }

    public function setTelephone1Personnel(?string $telephone1Personnel): self
    {
        $this->telephone1Personnel = $telephone1Personnel;

        return $this;
    }

    public function getTelephone2Personnel(): ?string
    {
        return $this->telephone2Personnel;
    }

    public function setTelephone2Personnel(?string $telephone2Personnel): self
    {
        $this->telephone2Personnel = $telephone2Personnel;

        return $this;
    }

    public function getTelephone3Personnel(): ?string
    {
        return $this->telephone3Personnel;
    }

    public function setTelephone3Personnel(?string $telephone3Personnel): self
    {
        $this->telephone3Personnel = $telephone3Personnel;

        return $this;
    }

    public function getFaxPersonnel(): ?string
    {
        return $this->faxPersonnel;
    }

    public function setFaxPersonnel(?string $faxPersonnel): self
    {
        $this->faxPersonnel = $faxPersonnel;

        return $this;
    }

    public function getPositionPersonnel(): ?int
    {
        return $this->positionPersonnel;
    }

    public function setPositionPersonnel(?int $positionPersonnel): self
    {
        $this->positionPersonnel = $positionPersonnel;

        return $this;
    }

    public function getEntreprisePersonnel(): ?int
    {
        return $this->entreprisePersonnel;
    }

    public function setEntreprisePersonnel(?int $entreprisePersonnel): self
    {
        $this->entreprisePersonnel = $entreprisePersonnel;

        return $this;
    }


}
