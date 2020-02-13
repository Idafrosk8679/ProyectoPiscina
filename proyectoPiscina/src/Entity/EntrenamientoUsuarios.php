<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntrenamientoUsuarios
 *
 * @ORM\Table(name="entrenamiento_usuarios", indexes={@ORM\Index(name="FK_entrenamiento_usuarios_usuarios", columns={"dni"})})
 * @ORM\Entity
 */
class EntrenamientoUsuarios
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
     * @ORM\Column(name="marca", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $marca = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="realizado", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $realizado = 'NULL';

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

    public function getMarca(): ?int
    {
        return $this->marca;
    }

    public function setMarca(?int $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getRealizado(): ?int
    {
        return $this->realizado;
    }

    public function setRealizado(?int $realizado): self
    {
        $this->realizado = $realizado;

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
