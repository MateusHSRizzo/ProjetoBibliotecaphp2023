<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Livros.php';

    $cod = $_GET['cod'];

    $bll = new \BLL\bllLivros(); 
    $bll->Delete($cod); 
    
    header("location: listalivros.php");
?>