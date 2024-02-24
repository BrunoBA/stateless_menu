<?php

namespace BrunoBA\Menu;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'state')]
class State
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id;

    #[ORM\Column(type: 'string')]
    private string $fqcn;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private DateTime $createdAt;

    public function __construct(string $fqcn)
    {
        $this->fqcn = $fqcn;
        $this->createdAt = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFqcn(): string
    {
        return $this->fqcn;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
