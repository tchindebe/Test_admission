<?php

namespace App\Entity;

use App\Repository\LinksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinksRepository::class)
 */
class Links
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $iso;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $nicename;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $iso3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numcode;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phonecode;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_active_destination;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIso(): ?string
    {
        return $this->iso;
    }

    public function setIso(string $iso): self
    {
        $this->iso = $iso;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNicename(): ?string
    {
        return $this->nicename;
    }

    public function setNicename(string $nicename): self
    {
        $this->nicename = $nicename;

        return $this;
    }

    public function getIso3(): ?string
    {
        return $this->iso3;
    }

    public function setIso3(?string $iso3): self
    {
        $this->iso3 = $iso3;

        return $this;
    }

    public function getNumcode(): ?int
    {
        return $this->numcode;
    }

    public function setNumcode(?int $numcode): self
    {
        $this->numcode = $numcode;

        return $this;
    }

    public function getPhonecode(): ?int
    {
        return $this->phonecode;
    }

    public function setPhonecode(?int $phonecode): self
    {
        $this->phonecode = $phonecode;

        return $this;
    }

    public function getIsActiveDestination(): ?bool
    {
        return $this->is_active_destination;
    }

    public function setIsActiveDestination(bool $is_active_destination): self
    {
        $this->is_active_destination = $is_active_destination;

        return $this;
    }
}
