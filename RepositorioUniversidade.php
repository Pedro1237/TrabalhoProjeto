<?php
class RepositorioUniversidade {
    public function cadastrar(PDO $banco, Universidade $universidade) {
        $sqlInsert = "INSERT INTO Universidade (nome, localizacao, numeroAlunos, faculdades, fundacao) VALUES (:nome, :localizacao, :numeroAlunos, :faculdades, :fundacao)";

        $insert = $banco->prepare($sqlInsert);

        $nome = $universidade->getNome();
        $localizacao = $universidade->getLocalizacao();
        $numeroAlunos = $universidade->getNumeroAlunos();
        $faculdades = $universidade->getFaculdades();
        $fundacao = $universidade->getFundacao();

        $insert->bindParam(":nome", $nome);
        $insert->bindParam(":localizacao", $localizacao);
        $insert->bindParam(":numeroAlunos", $numeroAlunos);
        $insert->bindParam(":faculdades", $faculdades);
        $insert->bindParam(":fundacao", $fundacao);

        $insert->execute();
    }

    public function listarTodas(PDO $banco) {
        $sql = "SELECT * FROM Universidade";
        $stmt = $banco->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
