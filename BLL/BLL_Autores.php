<?php
    namespace BLL; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalAutores.php';
    
    class bllAutor {
        public function Select(){
            $dal = new  \DAL\dalAutores(); 
            return $dal->Select();
        }

        public function Selectcod(int $cod){
            $dal = new  \DAl\dalAutores(); 
            return $dal->Selectcod($cod);
        }

        public function Insert(\MODEL\Autores $autores){
           $dal = new \DAL\dalAutores();
           $dal->Insert($autores);
        }

        public function Update(\MODEL\Autores $autores){
           $dal = new \DAL\dalAutores(); 
           $dal->Update($autores);
        }

        public function Delete(int $cod){ 
            $dal = new \DAL\dalAutores(); 
            $dal->Delete($cod);
         }
    }
?>