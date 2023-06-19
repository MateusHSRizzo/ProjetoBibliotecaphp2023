<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Pessoas.php';

    $cod = $_GET['cod'];

    $bll = new \BLL\bllPessoas(); 
    $bll->Delete($cod); 
    
    header("location: listapessoas.php");
?>