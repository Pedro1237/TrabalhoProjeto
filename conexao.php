<?php

try{ //Tentar executar o comando dentro bloco
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";

}catch(PDOException $e){ //Caso dê erro, faça isso
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS Universidade(
    nome TEXT,
    localizacao TEXT,
    numeroAlunos TEXT,
    faculdades TEXT,
    fundacao TEXT,
    primary key (localizacao))";

$banco->query($tabela);