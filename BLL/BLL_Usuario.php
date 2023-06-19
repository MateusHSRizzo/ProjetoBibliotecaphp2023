<?php
    namespace BLL; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalUsuario.php';
    
    class bllUsuario {
        public function SelectUser (string $usuario){
            $dal = new  \DAL\dalUsuario();
            return $dal->SelectUser($usuario);
        }
    }