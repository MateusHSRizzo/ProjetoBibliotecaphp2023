<?php
    namespace MODEL;
    
    class Editora {
        private ?int $cod = null;
        private ?string $nome = null;
        private ?string $rua = null;
        private ?string $bairro = null;
        private ?string $cnpj = null;
        private ?string $telefone = null;
        private ?string $email = null;
        private ?string $cidade = null;
        private ?string $estado = null;

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

        public function setbairro(string $bairro){
            $this->bairro = $bairro;
        }

        public function getbairro(){
            return $this->bairro;
        }

        public function setcnpj(string $cnpj){
            $this->cnpj = $cnpj;
        }

        public function getcnpj(){
            return $this->cnpj;
        }

        public function settelefone(string $telefone){
            $this->telefone = $telefone;
        }

        public function gettelefone(){
            return $this->telefone;
        }

        public function setemail(string $email){
            $this->email = $email;
        }

        public function getemail(){
            return $this->email;
        }

        public function setcidade(string $cidade){
            $this->cidade = $cidade;
        }

        public function getcidade(){
            return $this->cidade;
        }

        public function setestado(string $estado){
            $this->estado = $estado;
        }

        public function getestado(){
            return $this->estado;
        }
    }
?>