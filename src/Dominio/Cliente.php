<?php

declare(strict_types=1);

namespace Assistencia\Dominio;

use InvalidArgumentException;

class Cliente
{
    public function __construct(
        private string $nome,
        private string $telefone,
        private ?int $id = null
    ) {
        $this->nome = trim($nome);
        $this->telefone = trim($telefone);

        if (($id !== null && $id <= 0) || $this->nome === '' || $this->telefone === '') {
            throw new InvalidArgumentException('Cliente exige ID positivo, nome e telefone.');
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTelefon(): string
    {
        return $this->telefone;
    }
}