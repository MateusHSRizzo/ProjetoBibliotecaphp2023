<?php
    namespace BLL; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalLivros.php';
    
    class bllLivros {
        public function Select (){
            $dal = new  \DAL\dalLivros(); 
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalLivros(); 
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Livros $livros){
           $dal = new \DAL\dalLivros(); 
           $dal->Insert($livros);
        }

        public function Update (\MODEL\Livros $Livros){
           $dal = new \DAL\dalLivros(); 
           $dal->Update($Livros);
        }

        public function Delete (int $cod){
            $dal = new \DAL\dalLivros();
            $dal->Delete($cod);
         }
    }
?>