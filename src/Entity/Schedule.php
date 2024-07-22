<?php

namespace App\Entity;

use App\Repository\ScheduleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScheduleRepository::class)]
#[ORM\Table(name: 'agenda', schema: 'salao')]
class Schedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateAndHour = null;

    #[ORM\ManyToOne(inversedBy: 'schedules')]
    private ?Service $service = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAndHour(): ?\DateTimeInterface
    {
        return $this->dateAndHour;
    }

    public function setValueOfTheProcedure(float $valueOfTheProcedure): static
    {
        $this->valueOfTheProcedure = $valueOfTheProcedure;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }
}
