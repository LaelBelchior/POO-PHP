<?php

class Conta{
    private string $nome;
    private string $cpf;
    private float $saldo = 0;

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    public function recuperaCpf(): string
    {
        return $this -> cpf;
    }

    public function recuperaSaldo(): float
    {
        return $this -> saldo;
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

    public function defineNome(string $nomeUsuario): void
    {
        $this -> nome = $nomeUsuario;
    }

    public function defineCpf(string $cpfUsuario): void
    {
        $this -> cpf = $cpfUsuario;
    }

}