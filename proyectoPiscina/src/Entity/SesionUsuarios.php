<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SesionUsuarios
 *
 * @ORM\Table(name="sesion_usuarios", indexes={@ORM\Index(name="FK_sesion_usuarios_usuarios", columns={"dni"}), @ORM\Index(name="FK_sesion_usuarios_sesion", columns={"id_sesion"})})
 * @ORM\Entity
 */
class SesionUsuarios
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
     * @ORM\Column(name="asistencia", type="integer", nullable=true)
     */
    private $asistencia;

    /**
     * @var \Sesion
     *
     * @ORM\ManyToOne(targetEntity="Sesion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sesion", referencedColumnName="id")
     * })
     */
    private $idSesion;

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
