<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table(name="stage", indexes={@ORM\Index(name="FK_Stage_Personnel", columns={"Code_Stage_Personnel"}), @ORM\Index(name="FK_Stage_Etudiant", columns={"Code_Stage_Etudiant"})})
 * @ORM\Entity(repositoryClass="App\Repository\Stage")
 */
class Stage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Stage_Entreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeStageEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_Stage_Etudiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeStageEtudiant;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_Stage_Personnel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeStagePersonnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AnneeCivile_Stage", type="string", length=4, nullable=true, options={"fixed"=true})
     */
    private $anneecivileStage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateDebut_Stage", type="date", nullable=true)
     */
    private $datedebutStage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateFin_Stage", type="date", nullable=true)
     */
    private $datefinStage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mission_Stage", type="text", length=65535, nullable=true)
     */
    private $missionStage;

    public function getCodeStageEntreprise(): ?int
    {
        return $this->codeStageEntreprise;
    }

    public function getCodeStageEtudiant(): ?int
    {
        return $this->codeStageEtudiant;
    }

    public function getCodeStagePersonnel(): ?int
    {
        return $this->codeStagePersonnel;
    }

    public function getAnneecivileStage(): ?string
    {
        return $this->anneecivileStage;
    }

    public function setAnneecivileStage(?string $anneecivileStage): self
    {
        $this->anneecivileStage = $anneecivileStage;

        return $this;
    }

    public function getDatedebutStage(): ?\DateTimeInterface
    {
        return $this->datedebutStage;
    }

    public function setDatedebutStage(?\DateTimeInterface $datedebutStage): self
    {
        $this->datedebutStage = $datedebutStage;

        return $this;
    }

    public function getDatefinStage(): ?\DateTimeInterface
    {
        return $this->datefinStage;
    }

    public function setDatefinStage(?\DateTimeInterface $datefinStage): self
    {
        $this->datefinStage = $datefinStage;

        return $this;
    }

    public function getMissionStage(): ?string
    {
        return $this->missionStage;
    }

    public function setMissionStage(?string $missionStage): self
    {
        $this->missionStage = $missionStage;

        return $this;
    }


}
