<?php

namespace App\Entity;

use App\Repository\DbTestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DbTestRepository::class)]
class DbTest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $db_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDbName(): ?string
    {
        return $this->db_name;
    }

    public function setDbName(string $db_name): self
    {
        $this->db_name = $db_name;

        return $this;
    }
}
