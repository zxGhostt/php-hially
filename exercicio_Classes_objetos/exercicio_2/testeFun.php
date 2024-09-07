<?php

include 'funcionario.php';

$nome = $_GET['nome'];
$vH = $_GET['vH'];
$tH = $_GET['tH'];
$bonus = $_GET['bonus'];
$salario = $_GET['salario'];
$tipo = $_GET['tipo'];


//var_dump($nome);

$f1 = new Funcionario();

$f1->setNome($nome);
$f1->setBonus($bonus);
$f1->setValor($vH);
$f1->setTotal($tH);
$f1->setTipo($tipo);
$f1->setSalario($salario);

//var_dump($f1);

$f1->calcular();

$f1->info();
