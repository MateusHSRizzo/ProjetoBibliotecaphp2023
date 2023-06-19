<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Editora.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Editora.php';

    $editora = new MODEL\Editora(); 
    
    $editora->setnome($_POST['txtNome']);
    $editora->setrua($_POST['txtRua']);
    $editora->setbairro($_POST['txtBairro']);
    $editora->setcidade($_POST['txtCidade']);
    $editora->setestado($_POST['txtUF']);
    $editora->settelefone($_POST['txtTel']);
    $editora->setemail($_POST['txtEmail']);
    $editora->setcnpj($_POST['txtCNPJ']);

    $bll = new \BLL\bllEditora(); 
    $bll->Insert($editora); 
    
    header("location: listaeditoras.php");
?>