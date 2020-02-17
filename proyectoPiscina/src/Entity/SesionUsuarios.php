<?php

namespace App\Entity;

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
     * @var int|null
     *
     * @ORM\Column(name="asistencia", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $asistencia = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $comentario = 'NULL';

    /**
     * @var \Sesion
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Sesion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dni", referencedColumnName="dni")
     * })
     */
    private $dni;

    public function getAsistencia(): ?int
    {
        return $this->asistencia;
    }

    public function setAsistencia(?int $asistencia): self
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

    public function getId(): ?Sesion
    {
        return $this->id;
    }

    public function setId(?Sesion $id): self
    {
        $this->id = $id;

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


}
