<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;
use App\ContasTipo\ContaPoupanca;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo() . PHP_EOL;
    echo $conta->depositar(50) . PHP_EOL;
    echo $conta->obterSaldo() . PHP_EOL;
    echo $conta->sacar(33) . PHP_EOL;
    echo $conta->obterSaldo() . PHP_EOL;
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{
    echo "Banco " . $conta->getBanco();
    echo PHP_EOL;

    echo "Ag/.Conta " . $conta->getNomeAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "------------------------------";
    echo PHP_EOL;

}

$conta = new ContaCorrente(
    'Caixa',
    'Fernando',
    '08457',
    '8789',
    0
);

exibirDados($conta);
executarOperacoes($conta);
