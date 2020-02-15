<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TiposEntrenamiento
 *
 * @ORM\Table(name="tipos_entrenamiento")
 * @ORM\Entity
 */
class TiposEntrenamiento
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
     * @ORM\Column(name="tipo", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $tipo = '\'\'';

    public function __toString(){
        return $this->getTipo();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


}
