<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Pessoas.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Pessoas.php';

    $pessoa = new MODEL\Pessoas(); 
    
    $pessoa->setnome($_POST['txtNome']);
    $pessoa->setcpf($_POST['txtcpf']);
    $pessoa->settelefone($_POST['txttelefone']);
    $pessoa->setrua($_POST['txtrua']);
    $pessoa->setbairro($_POST['txtbairro']);

    $bll = new \BLL\bllPessoas(); 
    $bll->Insert($pessoa); 
    
    header("location: listapessoas.php");
?>