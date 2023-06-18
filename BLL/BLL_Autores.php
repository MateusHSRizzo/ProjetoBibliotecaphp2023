<?php
    namespace BLL; 
<<<<<<< HEAD
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalAutores.php';
    
    class bllAutor {
        public function Select (){
            $dal = new  \DAL\dalAutores(); 
=======
    use DAL\dalAutores; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalAutores.php';
    
    class bllAtor {
        public function Select (){
            $dal = new  \DAL\dalAutores(); 
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalAutores(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Autores $autores){
<<<<<<< HEAD
           $dal = new \DAL\dalAutores(); 

           $dal->Insert($autores);
        }

        public function Update (\MODEL\Autores $autores){
           $dal = new \DAL\dalAutores(); 

           $dal->Update($autores);
        }

        public function Delete (int $cod){ 
            $dal = new \DAL\dalAutores(); 
 
            $dal->Delete($cod);
         }
    }
=======

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




>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
?>