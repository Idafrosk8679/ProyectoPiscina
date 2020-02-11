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
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipo = '';

    public function getTipo(): ?string
    {
        return $this->tipo;
    }


}
