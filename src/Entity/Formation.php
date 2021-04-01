<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="App\Repository\Formation")
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


}
