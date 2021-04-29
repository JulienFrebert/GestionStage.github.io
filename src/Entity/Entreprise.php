<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="App\Repository\EntrepriseRepository")
 */
class Entreprise
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Entreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RaisonSociale_Entreprise", type="string", length=38, nullable=true)
     */
    private $raisonsocialeEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP_Entreprise", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $cpEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ville_Entreprise", type="string", length=38, nullable=true)
     */
    private $villeEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse_Entreprise", type="string", length=38, nullable=true)
     */
    private $adresseEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Site_Entreprise", type="string", length=128, nullable=true)
     */
    private $siteEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Telephone_Entreprise", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephoneEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fax_Entreprise", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $faxEntreprise;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commentaire_Entreprise", type="text", length=65535, nullable=true)
     */
    private $commentaireEntreprise;

    public function getCodeEntreprise(): ?int
    {
        return $this->codeEntreprise;
    }

    public function getRaisonsocialeEntreprise(): ?string
    {
        return $this->raisonsocialeEntreprise;
    }

    public function setRaisonsocialeEntreprise(?string $raisonsocialeEntreprise): self
    {
        $this->raisonsocialeEntreprise = $raisonsocialeEntreprise;

        return $this;
    }

    public function getCpEntreprise(): ?string
    {
        return $this->cpEntreprise;
    }

    public function setCpEntreprise(?string $cpEntreprise): self
    {
        $this->cpEntreprise = $cpEntreprise;

        return $this;
    }

    public function getVilleEntreprise(): ?string
    {
        return $this->villeEntreprise;
    }

    public function setVilleEntreprise(?string $villeEntreprise): self
    {
        $this->villeEntreprise = $villeEntreprise;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresseEntreprise;
    }

    public function setAdresseEntreprise(?string $adresseEntreprise): self
    {
        $this->adresseEntreprise = $adresseEntreprise;

        return $this;
    }

    public function getSiteEntreprise(): ?string
    {
        return $this->siteEntreprise;
    }

    public function setSiteEntreprise(?string $siteEntreprise): self
    {
        $this->siteEntreprise = $siteEntreprise;

        return $this;
    }

    public function getTelephoneEntreprise(): ?string
    {
        return $this->telephoneEntreprise;
    }

    public function setTelephoneEntreprise(?string $telephoneEntreprise): self
    {
        $this->telephoneEntreprise = $telephoneEntreprise;

        return $this;
    }

    public function getFaxEntreprise(): ?string
    {
        return $this->faxEntreprise;
    }

    public function setFaxEntreprise(?string $faxEntreprise): self
    {
        $this->faxEntreprise = $faxEntreprise;

        return $this;
    }

    public function getCommentaireEntreprise(): ?string
    {
        return $this->commentaireEntreprise;
    }

    public function setCommentaireEntreprise(?string $commentaireEntreprise): self
    {
        $this->commentaireEntreprise = $commentaireEntreprise;

        return $this;
    }


}
