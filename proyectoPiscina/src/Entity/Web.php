<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Web
 *
 * @ORM\Table(name="web")
 * @ORM\Entity
 */
class Web
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
     * @ORM\Column(name="telefono", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $telefono = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
