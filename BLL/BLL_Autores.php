<?php
    namespace BLL; 
    use DAL\dalAutores; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalAutores.php';
    
    class bllAtor {
        public function Select (){
            $dal = new  \DAL\dalAutores(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalAutores(); 
            //linhas de código com regras de negócio
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Autores $autores){

           $dal = new \DAL\dalAutores(); 

           $dal->Insert($autores);
          
        }

        public function Update (\MODEL\Autores $autores){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalAutores(); 

           $dal->Update($autores);
          
        }

        public function Delete (int $cod){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalAutores(); 
 
            $dal->Delete($cod);
           
         }
    }




?>