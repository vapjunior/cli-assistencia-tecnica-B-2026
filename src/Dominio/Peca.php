<?php

declare(strict_types=1);

namespace Assistencia\Dominio;

use InvalidArgumentException;

class Peca extends ItemOrcamento
{
    public function __construct(
        string $descricao,
        private int $quantidade,
        private int $precoUnitarioCentavos
    ) {
        parent::__construct($descricao);

        if ($quantidade <= 0 || $precoUnitarioCentavos <= 0) {
            throw new InvalidArgumentException('Quantidade e preço devem ser positivos.');
        }
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getPrecoUnitario(): int
    {
        return $this->precoUnitario;
    }

    public function calcularSubtotal(): int
    {
        return $this->quantidade * $this->precoUnitarioCentavos;
    }
}