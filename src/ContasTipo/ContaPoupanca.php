<?php 

declare(strict_types=1);

namespace App\ContasTipo;

namespace App\ContasTipo;

use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = 'Conta Poupança';

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo = 0){
        parent::__construct($banco,$nomeTitular,$numeroAgencia,$numeroConta,$saldo);
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo é R$:' . number_format(($this->saldo - self::RENDIMENTO), 2, '.', '');
    }
}