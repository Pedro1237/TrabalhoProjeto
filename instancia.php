<?php
require "Universidade.php";

$universidade = new Universidade("Universidade X", "Local X", 3000, "Faculdade X", "2022-01-01");


echo "Nome da universidade: " . $universidade->getNome() . "\n";
echo "Localização: " . $universidade->getLocalizacao() . "\n";
echo "Número de alunos: " . $universidade->getNumeroAlunos() . "\n";
echo "Faculdades: " . $universidade->getFaculdades() . "\n";
echo "Fundação: " . $universidade->getFundacao() . "\n";


$universidade->setNome("Nova Universidade");
$universidade->setLocalizacao("Novo Local");
$universidade->setNumeroAlunos(5000);


echo "Nome da universidade atualizado: " . $universidade->getNome() . "\n";
echo "Localização atualizada: " . $universidade->getLocalizacao() . "\n";
echo "Número de alunos atualizado: " . $universidade->getNumeroAlunos() . "\n";
?>
