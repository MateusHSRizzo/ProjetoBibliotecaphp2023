<?php
    namespace MODEL;
    
    class Pessoas {
        private ?int $cod;
        private ?string $nome;
        private ?string $rua;
        private ?string $bairro;
        private ?string $cpf;
        private ?string $telefone;

        public function __construct(){}

        public function getcod(){
            return $this->cod;
        }

        public function setcod(int $cod){
            $this->cod = $cod;
        }

        public function getnome(){
            return $this->nome;
        }

        public function setnome(string $nome){
            $this->nome = $nome;
        }

        public function getrua(){
            return $this->rua;
        }

        public function setrua(string $rua){
            $this->rua = $rua;
        }

        public function getbairro(){
            return $this->bairro;
        }

        public function setbairro(string $bairro){
            $this->bairro = $bairro;
        }

        public function getcpf(){
            return $this->cpf;
        }

        public function setcpf(string $cpf){
            $this->cpf = $cpf;
        }

        public function gettelefone(){
            return $this->telefone;
        }

        public function settelefone(string $telefone){
            $this->telefone = $telefone;
        }
    }       
?>