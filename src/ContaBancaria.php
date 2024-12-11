<?php

declare(strict_types=1);

namespace App;

use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface
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

    // Implementação de métodos do OperacoesContaBancariaInterface
    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'Depósito de R$:' . number_format($valor, 2, '.', '') . ' realizado com sucesso';
    }

    public function sacar(float $valor): string
    {
        if ($valor > $this->saldo) {
            return 'Saldo insuficiente para saque.';
        }
        $this->saldo -= $valor;
        return 'Saque de R$:' . number_format($valor, 2, '.', '') . ' realizado com sucesso';
    }

    // Método abstrato a ser implementado pelas classes filhas
    public abstract function obterSaldo(): string;

    // Implementação de métodos do DadosContaBancariaInterface
    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNomeAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    // Método auxiliar para exibir titular e número da conta
    public function exibirTitularNumeroConta(): array
    {
        return [
            'nomeTitular' => $this->nomeTitular,
            'numeroConta' => $this->numeroConta,
        ];
    }

    // Getter adicional para o saldo
    public function getSaldo(): float
    {
        return $this->saldo;
    }
}
