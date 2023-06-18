<?php
    namespace BLL; 
<<<<<<< HEAD
    use \DAL\dalAutores; 
=======
    use DAL\dalAutores; 
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalLivros.php';
    
    class bllLivros {
        public function Select (){
            $dal = new  \DAL\dalLivros(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalLivros(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Selectcod($cod);
        }

        public function Insert (\MODEL\Livros $livros){

           $dal = new \DAL\dalLivros(); 

           $dal->Insert($livros);
          
        }

        public function Update (\MODEL\Autores $Livros){
<<<<<<< HEAD
=======

           // regras de negócios devem ser implementadas neste local.

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           $dal = new \DAL\dalAutores(); 

           $dal->Update($Livros);
          
        }

        public function Delete (int $cod){
<<<<<<< HEAD
=======

            // regras de negócios devem ser implementadas neste local.
 
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
            $dal = new \DAL\dalAutores(); 
 
            $dal->Delete($cod);
           
         }
    }
<<<<<<< HEAD
=======




>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
?>