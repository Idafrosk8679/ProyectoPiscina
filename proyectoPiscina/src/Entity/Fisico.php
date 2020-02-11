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


}
