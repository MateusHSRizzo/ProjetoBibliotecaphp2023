<?php
    namespace BLL; 
<<<<<<< HEAD
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalPessoas.php';
    
    class bllPessoas {
        public function Select (){
            $dal = new  \DAL\dalPessoas(); 

=======
    use DAL\dalAutores; 
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\dalPessoas.php';
    
    class bllAtor {
        public function Select (){
            $dal = new  \DAL\dalPessoas(); 
            //linhas de código com regras de negócio
           
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
            return $dal->Select();
        }

        public function Selectcod (int $cod){
            $dal = new  \DAl\dalPessoas(); 
<<<<<<< HEAD
=======
            //linhas de código com regras de negócio
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
           
            return $dal->Selectcod($cod);
        }

<<<<<<< HEAD
        public function Insert(\MODEL\Pessoas $pessoas){
=======
        public function Insert (\MODEL\Pessoas $pessoas){
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

           $dal = new \DAL\dalPessoas(); 

           $dal->Insert($pessoas);
          
        }

<<<<<<< HEAD
        public function Update(\MODEL\Pessoas $pessoas){
           $dal = new \DAL\dalPessoas(); 

           $dal->Update($pessoas);
        }

        public function Delete(int $cod){ 
            $dal = new \DAL\dalPessoas(); 
 
            $dal->Delete($cod);
         }
    }
=======
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




>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
?>