<?php
    include 'CeO1.php';

    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    //var_dump($nota1);

    $aluno1 = new Aluno();

    $aluno1->nome = $nome;
    $aluno1->nota1 = $nota1;
    $aluno1->nota2 = $nota2;
    $aluno1->nota3 = $nota3;

    $aluno1->Media();

     //var_dump($aluno1);

    $aluno1->info();
?>