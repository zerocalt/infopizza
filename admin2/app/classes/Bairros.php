<?php
    class Bairros {
        private ?int $id;
        private int $id_pizzaria;
        private string $nome;
        private float $valor;
        private int $excluido;

        public function __construct(
            ?int $id = '', 
            int $id_pizzaria = 0, 
            string $nome = '', 
            float $valor = 0.0, 
            int $excluido = 0
            ) {
            $this->id = $id;
            $this->id_pizzaria = $id_pizzaria;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->excluido = $excluido;
        }

        public function getId(): ?int {
            return $this->id;
        }

        public function getIdPizzaria(): int {
            return $this->id_pizzaria;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function getValor(): float {
            return $this->valor;
        }

        public function getExcluido(): int {
            return $this->excluido;
        }

        public function setId(?int $id): void {
            $this->id = $id;
        }

        public function setIdPizzaria(int $id_pizzaria): void {
            $this->id_pizzaria = $id_pizzaria;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        public function setValor(float $valor): void {
            $this->valor = $valor;
        }

        public function setExcluido(int $excluido): void {
            $this->excluido = $excluido;
        }

    }
?>