<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="FK_usuarios_roles", columns={"rol"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apelllidos", type="string", length=50, nullable=false)
     */
    private $apelllidos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="foto", type="string", length=50, nullable=true)
     */
    private $foto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fecha_nac", type="string", length=50, nullable=true)
     */
    private $fechaNac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=true)
     */
    private $pass;

    /**
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol", referencedColumnName="id")
     * })
     */
    private $rol;


}
