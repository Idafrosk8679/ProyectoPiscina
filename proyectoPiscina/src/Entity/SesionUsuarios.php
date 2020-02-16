<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SesionUsuarios
 *
 * @ORM\Table(name="sesion_usuarios", indexes={@ORM\Index(name="FK_sesion_usuarios_usuarios", columns={"dni"})})
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
     * @var string|null
     *
     * @ORM\Column(name="asistencia", type="string", length=2, nullable=true, options={"default"="NULL"})
     */
    private $asistencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $comentario;

    /**
     * @var \Sesion
     *
     * 
     * @ORM\OneToOne(targetEntity="Sesion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sesion", referencedColumnName="id")
     * })
     */
    private $id_sesion;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Usuarios", mappedBy="dni")
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsistencia(): ?string
    {
        return $this->asistencia;
    }

    public function setAsistencia(?string $asistencia): self
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(?string $comentario): self
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getIdSesion(): ?Sesion
    {
        return $this->id_sesion;
    }

    public function setIdSesion(?Sesion $id_sesion): self
    {
        $this->id_sesion = $id_sesion;

        return $this;
    }

    public function getDni(): ?Usuarios
    {
        return $this->dni;
    }

    public function setDni(?Usuarios $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * @return Collection|Usuarios[]
     */
    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function addUsuario(Usuarios $usuario): self
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios[] = $usuario;
            $usuario->setSesionUsuarios($this);
        }

        return $this;
    }

    public function removeUsuario(Usuarios $usuario): self
    {
        if ($this->usuarios->contains($usuario)) {
            $this->usuarios->removeElement($usuario);
            // set the owning side to null (unless already changed)
            if ($usuario->getSesionUsuarios() === $this) {
                $usuario->setSesionUsuarios(null);
            }
        }

        return $this;
    }


}
