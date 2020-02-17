<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marcas
 *
 * @ORM\Table(name="marcas", indexes={@ORM\Index(name="FK_marcas_usuarios", columns={"dni"})})
 * @ORM\Entity
 */
class Marcas
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
     * @var string
     *
     * @ORM\Column(name="nombre_comp", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $nombreComp ;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="date", nullable=true, options={"default"="NULL"})
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="marca", type="time", nullable=false)
     */
    private $marca;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreComp(): ?string
    {
        return $this->nombreComp;
    }

    public function setNombreComp(string $nombreComp): self
    {
        $this->nombreComp = $nombreComp;

        return $this;
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

    public function getMarca(): ?\DateTimeInterface
    {
        return $this->marca;
    }

    public function setMarca(\DateTimeInterface $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getDni(): ?Usuarios
    {
        return $this->dni;
    }

    public function setDni(?Usuarios $dni): self
    {
        $this->dni = $dni;

        return $this;
    }


}
