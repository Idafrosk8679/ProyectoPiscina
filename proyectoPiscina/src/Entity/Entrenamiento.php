<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenamiento
 *
 * @ORM\Table(name="entrenamiento", indexes={@ORM\Index(name="FK_entrenamiento_distancia_entrenamiento", columns={"metros"}), @ORM\Index(name="FK_entrenamiento_estilos_entrenamiento", columns={"estilo"}), @ORM\Index(name="FK_entrenamiento_tipos_entrenamiento", columns={"tipos"}), @ORM\Index(name="FK_entrenamiento_sesion", columns={"id_sesion"})})
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
     * @var int|null
     *
     * @ORM\Column(name="series", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $series = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripciÃ³n", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descripciã³n = 'NULL';

    /**
     * @var \DistanciaEntrenamiento
     *
     * @ORM\ManyToOne(targetEntity="DistanciaEntrenamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metros", referencedColumnName="id")
     * })
     */
    private $metros;

    /**
     * @var \EstilosEntrenamiento
     *
     * @ORM\ManyToOne(targetEntity="EstilosEntrenamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estilo", referencedColumnName="id")
     * })
     */
    private $estilo;

    /**
     * @var \Sesion
     *
     * @ORM\ManyToOne(targetEntity="Sesion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sesion", referencedColumnName="id")
     * })
     */
    private $idSesion;

    /**
     * @var \TiposEntrenamiento
     *
     * @ORM\ManyToOne(targetEntity="TiposEntrenamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos", referencedColumnName="id")
     * })
     */
    private $tipos;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeries(): ?int
    {
        return $this->series;
    }

    public function setSeries(?int $series): self
    {
        $this->series = $series;

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

    public function getMetros(): ?DistanciaEntrenamiento
    {
        return $this->metros;
    }

    public function setMetros(?DistanciaEntrenamiento $metros): self
    {
        $this->metros = $metros;

        return $this;
    }

    public function getEstilo(): ?EstilosEntrenamiento
    {
        return $this->estilo;
    }

    public function setEstilo(?EstilosEntrenamiento $estilo): self
    {
        $this->estilo = $estilo;

        return $this;
    }

    public function getIdSesion(): ?Sesion
    {
        return $this->idSesion;
    }

    public function setIdSesion(?Sesion $idSesion): self
    {
        $this->idSesion = $idSesion;

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
