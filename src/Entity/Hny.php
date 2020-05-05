<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hny
 *
 * @ORM\Table(name="hny")
 * @ORM\Entity(repositoryClass="App\Repository\HnyRepository")
 */
class Hny
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
     * @ORM\Column(name="gmt", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $gmt = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=32, nullable=false)
     */
    private $nick = '';

    /**
     * @var string
     *
     * @ORM\Column(name="isocode", type="string", length=16, nullable=false)
     */
    private $isocode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="greeting", type="string", length=255, nullable=false)
     */
    private $greeting = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGmt(): ?\DateTimeInterface
    {
        return $this->gmt;
    }

    public function setGmt(\DateTimeInterface $gmt): self
    {
        $this->gmt = $gmt;

        return $this;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    public function getIsocode(): ?string
    {
        return $this->isocode;
    }

    public function setIsocode(string $isocode): self
    {
        $this->isocode = $isocode;

        return $this;
    }

    public function getGreeting(): ?string
    {
        return $this->greeting;
    }

    public function setGreeting(string $greeting): self
    {
        $this->greeting = $greeting;

        return $this;
    }

}
