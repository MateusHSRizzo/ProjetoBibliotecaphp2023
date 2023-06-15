<?php
    namespace BLL; 
    use DAL\dalAutores; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalEditora.php';
    
    class bllEditora {
        public function Select (){
            $dal = new  \DAL\dalEditora(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalEditora(); 
            //linhas de código com regras de negócio
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Editora $editora){

           $dal = new \DAL\dalEditora(); 

           $dal->Insert($editora);
          
        }

        public function Update (\MODEL\Editora $editora){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalEditora(); 

           $dal->Update($editora);
          
        }

        public function Delete (int $cod){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalEditora(); 
 
            $dal->Delete($cod);
           
         }
    }




?>