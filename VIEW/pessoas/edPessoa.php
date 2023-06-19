<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Pessoas.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Pessoas.php';

   $pessoa = new \MODEL\Pessoas(); 
   
   $pessoa->setcod($_POST['txtCOD']);
   $pessoa->setnome($_POST['txtNome']);
   $pessoa->setcpf($_POST['txtcpf']);
   $pessoa->settelefone($_POST['txttelefone']);
   $pessoa->setrua($_POST['txtrua']);
   $pessoa->setbairro($_POST['txtbairro']);

   $bll = new \BLL\bllPessoas(); 
   $bll->Update($pessoa); 
   
   header("location: listapessoas.php");
?>