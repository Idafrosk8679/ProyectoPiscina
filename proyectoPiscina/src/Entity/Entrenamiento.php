<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenamiento
 *
 * @ORM\Table(name="entrenamiento", indexes={@ORM\Index(name="FK_entrenamiento_tipos-entrenamiento", columns={"Tipos"})})
 * @ORM\Entity
 */
class Entrenamiento
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
     * @var int
     *
     * @ORM\Column(name="id_sesion", type="integer", nullable=false)
     */
    private $idSesion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Series", type="string", length=50, nullable=true)
     */
    private $series;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metros", type="integer", nullable=true)
     */
    private $metros;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripciÃ³n", type="text", length=65535, nullable=true)
     */
    private $descripciã³n;

    /**
     * @var \TiposEntrenamiento
     *
     * @ORM\ManyToOne(targetEntity="TiposEntrenamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipos", referencedColumnName="Tipo")
     * })
     */
    private $tipos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSesion(): ?int
    {
        return $this->idSesion;
    }

    public function setIdSesion(int $idSesion): self
    {
        $this->idSesion = $idSesion;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getMetros(): ?int
    {
        return $this->metros;
    }

    public function setMetros(?int $metros): self
    {
        $this->metros = $metros;

        return $this;
    }

    public function getDescripciã³n(): ?string
    {
        return $this->descripciã³n;
    }

    public function setDescripciã³n(?string $descripciã³n): self
    {
        $this->descripciã³n = $descripciã³n;

        return $this;
    }

    public function getTipos(): ?TiposEntrenamiento
    {
        return $this->tipos;
    }

    public function setTipos(?TiposEntrenamiento $tipos): self
    {
        $this->tipos = $tipos;

        return $this;
    }


}
