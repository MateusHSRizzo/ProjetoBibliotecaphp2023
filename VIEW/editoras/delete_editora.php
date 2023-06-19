<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Editora.php';

    $cod = $_GET['cod'];

    $bll = new \BLL\bllEditora(); 
    $bll->Delete($cod); 
    
    header("location: listaeditoras.php");
?>