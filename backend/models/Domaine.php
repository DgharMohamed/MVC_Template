<?php

require_once __DIR__ . '/DomaineDAO.php';

class Domaine extends DomaineDAO
{
    private ?int $id;
    private string $nom;
    private string $description;

    public function __construct(?int $id = null, string $nom = '', string $description = '')
    {
        parent::__construct();
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
