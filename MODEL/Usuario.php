<?php 
namespace MODEL; 

class Usuario {
    private ?int $cod;
    private ?string $usuario;
    private ?string $senha;
    private ?string $email; 
    
    public function __construct()
    {
     
    }

    public function getcod(){
        return $this->cod; 
    }
    
    public function setcod(int $cod){
        $this->cod = $cod; 
    }

    public function getUsuario(){
        return $this->usuario; 
    }
    
    public function setUsuario(string $usuario){
        $this->usuario = $usuario; 
    }
    
    public function getSenha(){
        return $this->senha; 
    }
    
    public function setSenha(string $senha){
        $this->senha = $senha; 
    }
    
    public function getEmail(){
        return $this->email; 
    }
    
    public function setEmail(string $email){
        $this->email = $email; 
    }

    
}