<?php


require __DIR__ . '/../vendor/autoload.php';

use Desktop\Opp\ContaBancaria;

$conta = new ContaBancaria(
    'Caixa',
    'Fernando',
    '08457',
    '8789',
    0
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->saque(25);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;



