<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebFotos
 *
 * @ORM\Table(name="web_fotos", indexes={@ORM\Index(name="FK_web_fotos_usuarios", columns={"id_usuario"})})
 * @ORM\Entity
 */
class WebFotos
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
     * @ORM\Column(name="foto", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $foto = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $descripcion = 'NULL';

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="dni")
     * })
     */
    private $idUsuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getIdUsuario(): ?Usuarios
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuarios $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }


}
