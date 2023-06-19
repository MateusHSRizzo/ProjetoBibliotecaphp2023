<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Autores.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Autores.php';

   $autor = new \MODEL\Autores(); 
   
   $autor->setcod($_POST['txtCOD']);
   $autor->setnome($_POST['txtNome']);

   $bll = new \BLL\bllAutor(); 
   $bll->Update($autor); 
   
   header("location: listaautores.php");
?>