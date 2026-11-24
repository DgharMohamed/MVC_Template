<?php

require_once dirname(__DIR__) . '/config/Database.php';

class DomaineDAO
{
    protected ?PDO $db = null;

    public function __construct(?PDO $db = null)
    {
        $this->db = $db;
    }

    protected function getDB(): PDO
    {
        if ($this->db === null) {
            $this->db = Database::getConnection();
        }
        return $this->db;
    }

    public function afficherTous(): array
    {
        return $this->getDB()->query("SELECT * FROM domaines ORDER BY id ASC")->fetchAll();
    }

    public function ajouter(string $nom, string $description): bool
    {
        $stmt = $this->getDB()->prepare("INSERT INTO domaines (nom, description) VALUES (?, ?)");
        return $stmt->execute([$nom, $description]);
    }
}
