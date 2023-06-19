<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Autores.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Autores.php';

    $autor = new MODEL\Autores(); 
    
    $autor->setNome($_POST['txtNome']);

    $bll = new \BLL\bllAutor(); 
    $bll->Insert($autor); 
    
    header("location: listaautores.php");
?>