<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel", indexes={@ORM\Index(name="FK_Personnel_Entreprise", columns={"Entreprise_Personnel"}), @ORM\Index(name="FK_Personnel_Position", columns={"Position_Personnel"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonnelRepository")
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
     * @var string
     *
     * @ORM\Column(name="Nom_Personnel", type="string", length=38, nullable=false)
     */
    private $nomPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Personnel", type="string", length=38, nullable=false)
     */
    private $prenomPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_Personnel", type="string", length=38, nullable=false)
     */
    private $emailPersonnel;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone_Personnel", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $telephonePersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Personnel", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $faxPersonnel;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Entreprise_Personnel", referencedColumnName="Code_Entreprise")
     * })
     */
    private $entreprisePersonnel;

    /**
     * @var \Position
     *
     * @ORM\ManyToOne(targetEntity="Position")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Position_Personnel", referencedColumnName="Code_Position")
     * })
     */
    private $positionPersonnel;

    public function getCodePersonnel(): ?int
    {
        return $this->codePersonnel;
    }

    public function getNomPersonnel(): ?string
    {
        return $this->nomPersonnel;
    }

    public function setNomPersonnel(string $nomPersonnel): self
    {
        $this->nomPersonnel = $nomPersonnel;

        return $this;
    }

    public function getPrenomPersonnel(): ?string
    {
        return $this->prenomPersonnel;
    }

    public function setPrenomPersonnel(string $prenomPersonnel): self
    {
        $this->prenomPersonnel = $prenomPersonnel;

        return $this;
    }

    public function getEmailPersonnel(): ?string
    {
        return $this->emailPersonnel;
    }

    public function setEmailPersonnel(string $emailPersonnel): self
    {
        $this->emailPersonnel = $emailPersonnel;

        return $this;
    }

    public function getTelephonePersonnel(): ?string
    {
        return $this->telephonePersonnel;
    }

    public function setTelephonePersonnel(string $telephonePersonnel): self
    {
        $this->telephonePersonnel = $telephonePersonnel;

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

    public function getEntreprisePersonnel(): ?Entreprise
    {
        return $this->entreprisePersonnel;
    }

    public function setEntreprisePersonnel(?Entreprise $entreprisePersonnel): self
    {
        $this->entreprisePersonnel = $entreprisePersonnel;

        return $this;
    }

    public function getPositionPersonnel(): ?Position
    {
        return $this->positionPersonnel;
    }

    public function setPositionPersonnel(?Position $positionPersonnel): self
    {
        $this->positionPersonnel = $positionPersonnel;

        return $this;
    }


}
