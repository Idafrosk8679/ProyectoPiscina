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


}
