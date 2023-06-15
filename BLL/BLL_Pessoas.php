<?php
    namespace BLL; 
    use DAL\dalAutores; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalPessoas.php';
    
    class bllAtor {
        public function Select (){
            $dal = new  \DAL\dalPessoas(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalPessoas(); 
            //linhas de código com regras de negócio
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Pessoas $pessoas){

           $dal = new \DAL\dalPessoas(); 

           $dal->Insert($pessoas);
          
        }

        public function Update (\MODEL\Pessoas $pessoas){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalPessoas(); 

           $dal->Update($pessoas);
          
        }

        public function Delete (int $cod){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalPessoas(); 
 
            $dal->Delete($cod);
           
         }
    }




?>