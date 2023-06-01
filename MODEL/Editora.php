<?php

namespace MODEL;

class Editora {
    private ?int $cod;
    private ?string $nome;
    private ?string $rua;
    private ?string $bairro;
    private ?int $cnpj;
    private ?string $telefone;
    private ?string $email;
    private ?string $cidade;
    private ?string $estado;
    private ?string $pais;

    public function __construct()
    {
        
    }

    public function getcod(){
        return $this->cod;
    }

    public function setcod(int $cod){
        $this->cod = $cod;
    }

    public function getnome(){
        return $this->nome;
    }

    public function setnome(int $nome){
        $this->nome = $nome;
    }

    public function getrua(){
        return $this->rua;
    }

    public function setrua(int $rua){
        $this->rua = $rua;
    }

    public function setbairro(int $bairro){
        $this->bairro = $bairro;
    }

    public function getbairro(){
        return $this->bairro;
    }

    public function setcnpj(int $cnpj){
        $this->cnpj = $cnpj;
    }

    public function getcnpj(){
        return $this->cnpj;
    }

    public function settelefone(int $telefone){
        $this->telefone = $telefone;
    }

    public function gettelefone(){
        return $this->telefone;
    }

    public function setemail(int $email){
        $this->email = $email;
    }

    public function getemail(){
        return $this->email;
    }

    public function setcidade(int $cidade){
        $this->cidade = $cidade;
    }

    public function getcidade(){
        return $this->cidade;
    }

    public function setestado(int $estado){
        $this->estado = $estado;
    }

    public function getestado(){
        return $this->estado;
    }

    public function setpais(int $pais){
        $this->pais = $pais;
    }

    public function getpais(){
        return $this->pais;
    }
}

?>