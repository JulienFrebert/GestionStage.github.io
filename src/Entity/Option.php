<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Option
 *
 * @ORM\Table(name="option")
 * @ORM\Entity
 */
class Option
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Option", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeOption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle_Option", type="string", length=38, nullable=true)
     */
    private $libelleOption;

    public function getCodeOption(): ?int
    {
        return $this->codeOption;
    }

    public function getLibelleOption(): ?string
    {
        return $this->libelleOption;
    }

    public function setLibelleOption(?string $libelleOption): self
    {
        $this->libelleOption = $libelleOption;

        return $this;
    }


}
