<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="FK_usuarios_roles", columns={"rol"})})
 * @ORM\Entity
 */
class Usuarios implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=50, nullable=false)
     * @ORM\Id
     *
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
     * 
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=true)
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

    public function __toString(){
        return $this->getNombre();
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApelllidos(): ?string
    {
        return $this->apelllidos;
    }

    public function setApelllidos(string $apelllidos): self
    {
        $this->apelllidos = $apelllidos;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getFechaNac(): ?\DateTimeInterface
    {
        return $this->fechaNac;
    }

    public function setFechaNac(?\DateTimeInterface $fechaNac): self
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    public function getRol(): ?Roles
    {
        return $this->rol;
    }

    public function setRol(?Roles $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(?string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->dni;
    }

    public function getSalt()
    {
        // podrías necesitar un verdadero salt dependiendo del encoder
        // ver la sección salt debajo
        return null;
    }

    public function getPassword(): ?string
    {
        return $this->pass;
    }

    public function setPassword(?string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(?string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->dni,
            $this->nombre,
            $this->pass,
            // ver la sección salt debajo
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->dni,
            $this->nombre,
            $this->pass,
            // ver la sección salt debajo
            // $this->salt
        ) = unserialize($serialized);
    }


}
