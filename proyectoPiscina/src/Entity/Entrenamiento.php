<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenamiento
 *
 * @ORM\Table(name="entrenamiento", indexes={@ORM\Index(name="FK_entrenamiento_tipos-entrenamiento", columns={"Tipos"})})
 * @ORM\Entity
 */
class Entrenamiento
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
     * @var int
     *
     * @ORM\Column(name="id_sesion", type="integer", nullable=false)
     */
    private $idSesion = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Series", type="string", length=50, nullable=true)
     */
    private $series;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metros", type="integer", nullable=true)
     */
    private $metros;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescripciÃ³n", type="text", length=65535, nullable=true)
     */
    private $descripciã³n;

    /**
     * @var \TiposEntrenamiento
     *
     * @ORM\ManyToOne(targetEntity="TiposEntrenamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipos", referencedColumnName="Tipo")
     * })
     */
    private $tipos;


}
