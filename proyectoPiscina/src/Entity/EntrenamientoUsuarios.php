<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntrenamientoUsuarios
 *
 * @ORM\Table(name="entrenamiento_usuarios")
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
     * @ORM\Column(name="dni", type="integer", nullable=true)
     */
    private $dni;

    /**
     * @var int|null
     *
     * @ORM\Column(name="marca", type="integer", nullable=true)
     */
    private $marca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="realizado", type="integer", nullable=true)
     */
    private $realizado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(?int $dni): self
    {
        $this->dni = $dni;

        return $this;
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


}
