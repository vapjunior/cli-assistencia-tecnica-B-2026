<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Assistencia\Dominio\Cliente;
use Assistencia\Dominio\Equipamento;
use Assistencia\Dominio\Peca;
use Assistencia\Dominio\Servico;

$cliente = new Cliente('Ana Souza', '14999990000');
$equipamento = new Equipamento($cliente, 'Notebook', 'Dell', 'Inspiron', 'ABC123');

echo $equipamento->getProprietario()->getNome() . PHP_EOL;

$peca = new Peca("Chave alien", 2, 15000);
$servico = new Servico("Troca de bateria", 1, 16000);

echo "Subtotal peça: R$ " . $peca->calcularSubTotal() / 100 . PHP_EOL;
echo "Subtotal serviço: R$ " . $servico->calcularSubTotal() / 100 . PHP_EOL;