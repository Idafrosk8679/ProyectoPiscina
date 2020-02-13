<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DistanciaEntrenamiento
 *
 * @ORM\Table(name="distancia_entrenamiento")
 * @ORM\Entity
 */
class DistanciaEntrenamiento
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
     * @ORM\Column(name="distancia", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $distancia = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDistancia(): ?int
    {
        return $this->distancia;
    }

    public function setDistancia(?int $distancia): self
    {
        $this->distancia = $distancia;

        return $this;
    }


}
