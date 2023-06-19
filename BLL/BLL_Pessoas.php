<?php
    namespace BLL; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalPessoas.php';
    
    class bllPessoas {
        public function Select (){
            $dal = new  \DAL\dalPessoas(); 
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalPessoas(); 
            return $dal->Selectcod($cod);
        }

        public function Insert(\MODEL\Pessoas $pessoas){
           $dal = new \DAL\dalPessoas(); 
           $dal->Insert($pessoas);
        }

        public function Update(\MODEL\Pessoas $pessoas){
           $dal = new \DAL\dalPessoas(); 
           $dal->Update($pessoas);
        }

        public function Delete(int $cod){ 
            $dal = new \DAL\dalPessoas(); 
            $dal->Delete($cod);
         }
    }
?>