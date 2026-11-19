<?php

declare(strict_types=1);

namespace Assistencia\Dominio;

use InvalidArgumentException;

class Servico extends ItemOrcamento
{
    public function __construct(
        string $descricao,
        private int $horas,
        private int $valorHoraCentavos
    ) {
        parent::__construct($descricao);

        if ($horas <= 0 || $valorHoraCentavos <= 0) {
            throw new InvalidArgumentException('Horas e valor por horas deve ser positivos.');
        } 
    }

    public function getHoras(): int
    {
        return $this->horas;
    }

    public function getValorHoraCentavos(): int
    {
        return $this->valorHoraCentavos;
    }

    public function calcularSubtotal(): int
    {
        return $this->horas * $this->valorHoraCentavos;
    }
}