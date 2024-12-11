<?php

declare(strict_types=1);

namespace App;

abstract class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    protected float $saldo;


    // Construtor
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo = 0
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }


    //Metodo Deposito
    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$:' . number_format($valor, 2, '.', '') . ' realizado com sucesso';
    }

    //Metodo Saque
    public function saque(float $valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$:' . number_format($valor, 2, '.','') . ' realizado com sucesso';
    }

    public abstract function obterSaldo(): string;
    // public function obterSaldo(): string
    // {
    //     return 'Seu saldo é: R$:' . number_format($this->saldo,2,'.','');
    // }


    // Método para exibir titular e número da conta
    public function exibir_titular_numeroConta(): array
    {
        return [
            'nomeTitular' => $this->nomeTitular,
            'numeroConta' => $this->numeroConta,
        ];
    }

    // Getters
    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}
