<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesion
 *
 * @ORM\Table(name="sesion", indexes={@ORM\Index(name="FK_sesion_grupos", columns={"id_grupo"})})
 * @ORM\Entity
 */
class Sesion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \Grupos
     *
     * @ORM\ManyToOne(targetEntity="Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id")
     * })
     */
    private $idGrupo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdGrupo(): ?Grupos
    {
        return $this->idGrupo;
    }

    public function setIdGrupo(?Grupos $idGrupo): self
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }


}
