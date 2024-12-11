<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;
use App\ContasTipo\ContaPoupanca;

// Instanciando uma conta corrente
$conta = new ContaCorrente(
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
echo PHP_EOL;

// Instanciando uma conta poupança
$pou = new ContaPoupanca(
    'Caixa',
    'Fernando',
    '08457',
    '8789',
    0
);

echo $pou->obterSaldo();
echo PHP_EOL;

echo $pou->depositar(50);
echo PHP_EOL;

echo $pou->obterSaldo();
echo PHP_EOL;

echo $pou->saque(33);
echo PHP_EOL;

echo $pou->obterSaldo();
