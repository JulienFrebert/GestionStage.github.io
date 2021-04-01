<?php

namespace App\Entity;

use App\Repository\PrefererRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Preferer
 *
 * @ORM\Table(name="preferer", indexes={@ORM\Index(name="FK_Préférer_Formation", columns={"Code_Preferer_Formation"})})
 * @ORM\Entity(repositoryClass="App\Repository\Preferer")
 */
class Preferer
{
    /**
     * @var int
     *
     * @ORM\Column(name="Code_Preferer_Entreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codePrefererEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="Code_Preferer_Formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codePrefererFormation;

    public function getCodePrefererEntreprise(): ?int
    {
        return $this->codePrefererEntreprise;
    }

    public function getCodePrefererFormation(): ?int
    {
        return $this->codePrefererFormation;
    }


}
