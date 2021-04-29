<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="position")
 * @ORM\Entity
 */
class Position
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Position", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePosition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle_Position", type="string", length=38, nullable=true)
     */
    private $libellePosition;

    public function getCodePosition(): ?int
    {
        return $this->codePosition;
    }

    public function getLibellePosition(): ?string
    {
        return $this->libellePosition;
    }

    public function setLibellePosition(?string $libellePosition): self
    {
        $this->libellePosition = $libellePosition;

        return $this;
    }


}
