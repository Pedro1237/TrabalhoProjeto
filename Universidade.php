<?php
class Universidade {
    public string $nome;
    public string $localizacao;
    public int $numeroAlunos;
    public string $faculdades;
    public int $fundacao;

    public function __construct(string $nome, string $localizacao, int $numeroAlunos, string $faculdades, int $fundacao) {
        $this->nome = $nome;
        $this->localizacao = $localizacao;
        $this->numeroAlunos = $numeroAlunos;
        $this->faculdades = $faculdades;
        $this->fundacao = $fundacao;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getLocalizacao(): string {
        return $this->localizacao;
    }

    public function setLocalizacao(string $localizacao): void {
        $this->localizacao = $localizacao;
    }

    public function getNumeroAlunos(): int {
        return $this->numeroAlunos;
    }

    public function setNumeroAlunos(int $numeroAlunos): void {
        $this->numeroAlunos = $numeroAlunos;
    }

    public function getFaculdades(): string {
        return $this->faculdades;
    }

    public function setFaculdades(string $faculdades): void {
        $this->faculdades = $faculdades;
    }

    public function getFundacao(): int {
        return $this->fundacao;
    }

    public function setFundacao(int $fundacao): void {
        $this->fundacao = $fundacao;
    }
}
?>
