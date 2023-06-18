<?php
    namespace BLL; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalEditora.php';
    
    class bllEditora {
        public function Select (){
            $dal = new  \DAL\dalEditora(); 
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalEditora(); 
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Editora $editora){
           $dal = new \DAL\dalEditora(); 

           $dal->Insert($editora);
        }

        public function Update (\MODEL\Editora $editora){
           $dal = new \DAL\dalEditora(); 

           $dal->Update($editora);
        }

        public function Delete (int $cod){ 
            $dal = new \DAL\dalEditora(); 
 
            $dal->Delete($cod);
         }
    }




?>