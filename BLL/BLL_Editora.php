<?php
    namespace BLL; 
<<<<<<< HEAD
=======
    use DAL\dalAutores; 
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalEditora.php';
    
    class bllEditora {
        public function Select (){
            $dal = new  \DAL\dalEditora(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalEditora(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Editora $editora){
<<<<<<< HEAD
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
=======

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
           
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
         }
    }




?>