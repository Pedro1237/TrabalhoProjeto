<?php
require "conexao.php";
require "Universidade.php";
require "RepositorioUniversidade.php";

$repUniversidade = new RepositorioUniversidade();

$todasUniversidades = $repUniversidade->listarTodas($banco);

foreach ($todasUniversidades as $universidade) {
    echo "\n -----------------------------------";
    echo "\n Nome da universidade | " . $universidade['nome'];
    echo "\n Localização          | " . $universidade['localizacao'];
    echo "\n Número de alunos     | " . $universidade['numeroAlunos'];
    echo "\n Faculdades           | " . $universidade['faculdades'];
    echo "\n Fundação             | " . $universidade['fundacao'];
    echo "\n -----------------------------------";
}
?>
