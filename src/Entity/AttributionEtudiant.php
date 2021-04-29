<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributionEtudiant
 *
 * @ORM\Table(name="attribution_etudiant", indexes={@ORM\Index(name="Code_Session_Attrib", columns={"Code_Session_Attrib"}), @ORM\Index(name="Code_Option_Attrib", columns={"Code_Option_Attrib"}), @ORM\Index(name="IDX_BC152E6065B4F39", columns={"Code_Etudiant_Attrib"})})
 * @ORM\Entity
 */
class AttributionEtudiant
{
    /**
     * @var \Option
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Option")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Option_Attrib", referencedColumnName="Code_Option")
     * })
     */
    private $codeOptionAttrib;

    /**
     * @var \Session
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Session_Attrib", referencedColumnName="Code_Session")
     * })
     */
    private $codeSessionAttrib;

    /**
     * @var \Etudiant
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Etudiant_Attrib", referencedColumnName="Code_Etudiant")
     * })
     */
    private $codeEtudiantAttrib;

    public function getCodeOptionAttrib(): ?Option
    {
        return $this->codeOptionAttrib;
    }

    public function setCodeOptionAttrib(?Option $codeOptionAttrib): self
    {
        $this->codeOptionAttrib = $codeOptionAttrib;

        return $this;
    }

    public function getCodeSessionAttrib(): ?Session
    {
        return $this->codeSessionAttrib;
    }

    public function setCodeSessionAttrib(?Session $codeSessionAttrib): self
    {
        $this->codeSessionAttrib = $codeSessionAttrib;

        return $this;
    }

    public function getCodeEtudiantAttrib(): ?Etudiant
    {
        return $this->codeEtudiantAttrib;
    }

    public function setCodeEtudiantAttrib(?Etudiant $codeEtudiantAttrib): self
    {
        $this->codeEtudiantAttrib = $codeEtudiantAttrib;

        return $this;
    }


}
