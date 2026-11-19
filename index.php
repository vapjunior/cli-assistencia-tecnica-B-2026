<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Assistencia\Dominio\Cliente;
use Assistencia\Dominio\Equipamento;

$cliente = new Cliente('Ana Souza', '14999990000');
$equipamento = new Equipamento($cliente, 'Notebook', 'Dell', 'Inspiron', 'ABC123');

echo $equipamento->getProprietario()->getNome() . PHP_EOL;