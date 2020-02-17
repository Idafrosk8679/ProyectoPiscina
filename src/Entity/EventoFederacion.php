<?php

namespace App\Entity;

class EventoFederacion
{
    private $fechas;

    private $competicion;

    private $centro;

    private $localidad;

    private $horario;

    private $categoria;

    public function getFechas(): ?string
    {
        return $this->fechas;
    }

    public function setFechas(string $fechas): self
    {
        $this->fechas = $fechas;

        return $this;
    }

    public function getCompeticion(): ?string
    {
        return $this->competicion;
    }

    public function setCompeticion(string $competicion=' '): self
    {
        $this->competicion = $competicion;

        return $this;
    }

    public function getCentro(): ?string
    {
        return $this->centro;
    }

    public function setCentro(string $centro=' '): self
    {
        $this->centro = $centro;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad=' '): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getHorario(): ?string
    {
        return $this->horario;
    }

    public function setHorario(string $horario=' '): self
    {
        $this->horario = $horario;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function __toString(){
        return $this->getFechas().' | '. $this->setCompeticion().' | '. $this->getCentro().' | '. $this->getLocalidad().' | '. $this->getHorario().' | '. $this->getCategoria();
    }
}
