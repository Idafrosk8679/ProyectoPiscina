<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fisico
 *
 * @ORM\Table(name="fisico", indexes={@ORM\Index(name="FK_fisico_usuarios", columns={"dni"})})
 * @ORM\Entity
 */
class Fisico
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
     * @var float
     *
     * @ORM\Column(name="altura", type="float", precision=10, scale=0, nullable=false)
     */
    private $altura;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float", precision=10, scale=0, nullable=false)
     */
    private $peso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inserc", type="date", nullable=false)
     */
    private $fechaInserc;

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

    public function getAltura(): ?float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso(): ?float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function getFechaInserc(): ?\DateTimeInterface
    {
        return $this->fechaInserc;
    }

    public function setFechaInserc(\DateTimeInterface $fechaInserc): self
    {
        $this->fechaInserc = $fechaInserc;

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
