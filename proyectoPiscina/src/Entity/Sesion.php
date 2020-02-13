<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sesion
 *
 * @ORM\Table(name="sesion")
 * @ORM\Entity
 */
class Sesion
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_inicio", type="time", nullable=true, options={"default"="NULL"})
     */
    private $horaInicio = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hora_final", type="time", nullable=true, options={"default"="NULL"})
     */
    private $horaFinal = 'NULL';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHoraInicio(): ?\DateTimeInterface
    {
        return $this->horaInicio;
    }

    public function setHoraInicio(?\DateTimeInterface $horaInicio): self
    {
        $this->horaInicio = $horaInicio;

        return $this;
    }

    public function getHoraFinal(): ?\DateTimeInterface
    {
        return $this->horaFinal;
    }

    public function setHoraFinal(?\DateTimeInterface $horaFinal): self
    {
        $this->horaFinal = $horaFinal;

        return $this;
    }


}
