<?php
/**
 * Created by PhpStorm.
 */
include 'Aluno.php';
include 'Professor.php';

$aluno1 = new Aluno();
$aluno1->setNome("Maria da Silva");
$aluno1->setidade(25);
$aluno1->setSalario(1250.22);


echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getIdade();
echo "<br>";
echo $aluno1->getSalario();

$p1 = new Professor("João", 2589.88);
echo "<br>";
echo $p1->getNome() . " ganha " . $p1->getSalario();





