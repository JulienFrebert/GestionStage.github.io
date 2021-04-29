<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="Code_Session", type="string", length=8, nullable=false, options={"fixed"=true,"comment"="Exemple : ""1SIO2020"""})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeSession;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle_Session", type="string", length=255, nullable=false, options={"comment"="Exemple : ""2020-2021"""})
     */
    private $libelleSession;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebutStageDefaut_Session", type="date", nullable=false)
     */
    private $datedebutstagedefautSession;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinStageDefaut_Session", type="date", nullable=false)
     */
    private $datefinstagedefautSession;

    public function getCodeSession(): ?string
    {
        return $this->codeSession;
    }

    public function getLibelleSession(): ?string
    {
        return $this->libelleSession;
    }

    public function setLibelleSession(string $libelleSession): self
    {
        $this->libelleSession = $libelleSession;

        return $this;
    }

    public function getDatedebutstagedefautSession(): ?\DateTimeInterface
    {
        return $this->datedebutstagedefautSession;
    }

    public function setDatedebutstagedefautSession(\DateTimeInterface $datedebutstagedefautSession): self
    {
        $this->datedebutstagedefautSession = $datedebutstagedefautSession;

        return $this;
    }

    public function getDatefinstagedefautSession(): ?\DateTimeInterface
    {
        return $this->datefinstagedefautSession;
    }

    public function setDatefinstagedefautSession(\DateTimeInterface $datefinstagedefautSession): self
    {
        $this->datefinstagedefautSession = $datefinstagedefautSession;

        return $this;
    }


}
