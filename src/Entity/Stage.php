<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="Code_Personnel_Stage", columns={"Code_Personnel_Stage"}), @ORM\Index(name="Code_Attrib_Etudiant_Etudiant", columns={"Code_Attrib_Etudiant_Etudiant", "Code_Attrib_Etudiant_Option", "Code_Attrib_Etudiant_Session"}), @ORM\Index(name="Code_Entreprise_Stage", columns={"Code_Entreprise_Stage"})})
 * @ORM\Entity
 */
class Stage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Stage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut_Stage", type="date", nullable=false)
     */
    private $datedebutStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin_Stage", type="date", nullable=false)
     */
    private $datefinStage;

    /**
     * @var string
     *
     * @ORM\Column(name="Mission_Stage", type="text", length=65535, nullable=false)
     */
    private $missionStage;

    /**
     * @var \Entreprise
     *
     * @ORM\ManyToOne(targetEntity="Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Entreprise_Stage", referencedColumnName="Code_Entreprise")
     * })
     */
    private $codeEntrepriseStage;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Personnel_Stage", referencedColumnName="Code_Personnel")
     * })
     */
    private $codePersonnelStage;

    /**
     * @var \AttributionEtudiant
     *
     * @ORM\ManyToOne(targetEntity="AttributionEtudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Attrib_Etudiant_Etudiant", referencedColumnName="Code_Etudiant_Attrib"),
     *   @ORM\JoinColumn(name="Code_Attrib_Etudiant_Option", referencedColumnName="Code_Option_Attrib"),
     *   @ORM\JoinColumn(name="Code_Attrib_Etudiant_Session", referencedColumnName="Code_Session_Attrib")
     * })
     */
    private $codeAttribEtudiantEtudiant;

    public function getCodeStage(): ?int
    {
        return $this->codeStage;
    }

    public function getDatedebutStage(): ?\DateTimeInterface
    {
        return $this->datedebutStage;
    }

    public function setDatedebutStage(\DateTimeInterface $datedebutStage): self
    {
        $this->datedebutStage = $datedebutStage;

        return $this;
    }

    public function getDatefinStage(): ?\DateTimeInterface
    {
        return $this->datefinStage;
    }

    public function setDatefinStage(\DateTimeInterface $datefinStage): self
    {
        $this->datefinStage = $datefinStage;

        return $this;
    }

    public function getMissionStage(): ?string
    {
        return $this->missionStage;
    }

    public function setMissionStage(string $missionStage): self
    {
        $this->missionStage = $missionStage;

        return $this;
    }

    public function getCodeEntrepriseStage(): ?Entreprise
    {
        return $this->codeEntrepriseStage;
    }

    public function setCodeEntrepriseStage(?Entreprise $codeEntrepriseStage): self
    {
        $this->codeEntrepriseStage = $codeEntrepriseStage;

        return $this;
    }

    public function getCodePersonnelStage(): ?Personnel
    {
        return $this->codePersonnelStage;
    }

    public function setCodePersonnelStage(?Personnel $codePersonnelStage): self
    {
        $this->codePersonnelStage = $codePersonnelStage;

        return $this;
    }

    public function getCodeAttribEtudiantEtudiant(): ?AttributionEtudiant
    {
        return $this->codeAttribEtudiantEtudiant;
    }

    public function setCodeAttribEtudiantEtudiant(?AttributionEtudiant $codeAttribEtudiantEtudiant): self
    {
        $this->codeAttribEtudiantEtudiant = $codeAttribEtudiantEtudiant;

        return $this;
    }


}
