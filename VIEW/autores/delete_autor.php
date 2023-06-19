<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Autores.php';

    $cod = $_GET['cod'];

    $bll = new \BLL\bllAutor(); 
    $bll->Delete($cod); 
    
    header("location: listaautores.php");
?>