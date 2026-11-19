<?php

declare(strict_types=1);

namespace Assistencia\Dominio;

use InvalidArgumentException;

abstract class ItemOrcamento
{
    public function __construct(private string $descricao)
    {
        $this->descricao = trim($descricao);

        if ($this->descricao === '') {
            throw new InvalidArgumentException('A descrição do item é obrigatória.');
        }
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    abstract public function calcularSubTotal(): int;
}