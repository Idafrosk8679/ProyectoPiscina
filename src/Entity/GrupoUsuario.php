<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoUsuario
 *
 * @ORM\Table(name="grupo_usuario", indexes={@ORM\Index(name="FK_grupo_usuario_usuarios", columns={"id_usuario"}), @ORM\Index(name="FK__grupos", columns={"id_grupo"})})
 * @ORM\Entity
 */
class GrupoUsuario
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
     * @var \Grupos
     *
     * @ORM\ManyToOne(targetEntity="Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id")
     * })
     */
    private $idGrupo;

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

    public function getIdGrupo(): ?Grupos
    {
        return $this->idGrupo;
    }

    public function setIdGrupo(?Grupos $idGrupo): self
    {
        $this->idGrupo = $idGrupo;

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
