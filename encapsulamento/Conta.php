<?php

class Conta{

    private Titular $titular;
    private float $saldo;

    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        $this -> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function depositar(float $valorDepositado): void
    {
        if($valorDepositado <= 0){
            echo "O valor de depósito precisa ser maior que zero!";
            return;
        }

        $this -> saldo += $valorDepositado;
    }

    public function sacar(float $valorSaque): void
    {
        if($valorSaque > $this -> saldo){
            echo "Saque não pode ser maior que o seu saldo!";
            return;
        }

        $this -> saldo -= $valorSaque;
    }

    public function transferir(float $valorTransferencia, Conta $contaTransferencia): void
    {
        if($valorTransferencia >= $this -> saldo){
            echo "Você não tem saldo para realizar essa transferência!";

            return;
        }

        $this -> sacar($valorTransferencia);
        $contaTransferencia -> depositar($valorTransferencia);
    }

    public function recuperaNomeTitular(): string
    {
        return $this -> titular -> recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this -> titular -> recuperaCpf();
    }

    public function recuperaSaldo(): float
    {
        return $this -> saldo;
    }

    public function recuperaNumeroContas(): int
    {
        return self::$numeroDeContas;
    }

}