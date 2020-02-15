<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distancia
 *
 * @ORM\Table(name="distancia")
 * @ORM\Entity
 */
class Distancia
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
    private $distancia;

    public function __toString(){
        return (string) $this->getDistancia();
    }

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
