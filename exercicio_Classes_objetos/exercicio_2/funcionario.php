<?php

class Funcionario
{
    //atributos
    private $nome;
    private $salario;
    private $bonus;
    private $vH;
    private $tH;
    private $tipo;


    //visibilidade: public, protected, private.

    //objeto
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    ////////////////////////////////11111///////////////////////////////////////////////

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    /////////////////////////////////////22222//////////////////////////////////////////////

    public function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }
    public function getBonus()
    {
        return $this->bonus;
    }
    //////////////////////////////////////3333//////////////////////////////////////////

    public function setValor($vH)
    {
        $this->vH = $vH;
    }
    public function getValor()
    {
        return $this->vH;
    }
    ////////////////////////////////////////44444///////////////////////////////////////////

    public function setTotal($tH)
    {
        $this->tH = $tH;
    }
    public function getTotal()
    {
        return $this->tH;
    }
    //////////////////////////////////////5555555////////////////////////////////////////
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }


    public function calcular()
    {
        if ($this->tipo == 'assalariado') {
            $this->salario = (float)($this->salario * ($this->bonus / 100)) + $this->salario;
        } else {
            $this->salario = $this->tH * $this->vH;
        }
    }
    public function info()
    {
        echo "Nome: " . $this->nome .
            "<br>Salario: " . $this->salario;
    }
}
