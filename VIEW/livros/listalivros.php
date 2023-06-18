<?php

    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Livros.php';
    $bll = new \BLL\bllLivros();
    $lstlivros = $bll->Select();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>Lista de Livros</title>
</head>
<body>
    <?php include_once '../menu.php' ?>
    <h1>Lista De Livros Disponiveis Para Emprestimo</h1>

<<<<<<< HEAD
    <table class="striped grey">
=======
    <table class="striped green">
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    <tr>
        <th>COD</th>
        <th>NOME</th>
        <th>N. DE PAGINAS</th>
        <th>ANO DE LANÇAMENTO</th>
        <th>AUTOR</th>
        <th>EDITORA</th>
    </tr>

    <?php
    if($lstlivros != null){
        foreach($lstlivros as $livro){  
    ?>
        <tr>
<<<<<<< HEAD
            <td><?= $livro->getcod();?></td>
            <td><?= $livro->getnome();?></td>
            <td><?= $livro->getn_paginas();?></td>
            <td><?= $livro->getdata_de_lancamento();?></td>
            <td><?= $livro->getautor();?></td>
            <td><?= $livro->geteditora();?></td>
=======
            <td><?php echo $livros->getcod();?></td>
            <td><?php echo $livros->getnome();?></td>
            <td><?php echo $livros->getgenero();?></td>
            <td><?php echo $livros->getdata_de_lancamento();?></td>
            <td><?php echo $livros->getautor();?></td>
            <td><?php echo $livros->geteditora();?></td>
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        </tr>
    <?php
            }
        }
    ?>

    </table>
</body>
</html>