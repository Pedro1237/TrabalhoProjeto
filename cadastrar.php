<?php
require "conexao.php";
require "Universidade.php";
require "RepositorioUniversidade.php";

$repUniversidade = new RepositorioUniversidade();

$universidade1 = new Universidade("Universidade A", "Local A", 1000, "Faculdade A", "2020-01-01");
$universidade2 = new Universidade("Universidade B", "Local B", 2000, "Faculdade B", "2021-02-01");
$universidade3 = new Universidade("Universidade C", "Local C", 1500, "Faculdade C", "2019-03-01");

$repUniversidade->cadastrar($banco, $universidade1);
$repUniversidade->cadastrar($banco, $universidade2);
$repUniversidade->cadastrar($banco, $universidade3);
?>
