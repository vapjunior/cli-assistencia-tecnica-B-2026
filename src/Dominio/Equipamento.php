<?php

declare(strict_types=1);

namespace Assistencia\Dominio;

use InvalidArgumentException;

class Equipamento
{
    public function __construct(
        private Cliente $proprietario,
        private string $tipo,
        private string $marca,
        private string $modelo,
        private string $numeroSerie,
        private ?int $id = null
    ) {
        $this->tipo = trim($tipo);
        $this->marca = trim($marca);
        $this->modelo = trim($modelo);
        $this->numeroSerie = trim($numeroSerie);

        if (
            ($id !== null && $id <= 0) || $this->tipo === '' || $this->marca === ''
            || $this->modelo === '' || $this->numeroSerie === ''
        ) {
            throw new InvalidArgumentException('Preencha todos os dados do equipamento.');
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProprietario(): Cliente
    {
        return $this->proprietario;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getNumeroSerie(): string
    {
        return $this->numeroSerie;
    }
}