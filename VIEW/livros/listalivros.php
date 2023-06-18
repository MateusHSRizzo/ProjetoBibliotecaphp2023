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

    <table class="striped grey">
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
            <td><?= $livro->getcod();?></td>
            <td><?= $livro->getnome();?></td>
            <td><?= $livro->getn_paginas();?></td>
            <td><?= $livro->getdata_de_lancamento();?></td>
            <td><?= $livro->getautor();?></td>
            <td><?= $livro->geteditora();?></td>
        </tr>
    <?php
            }
        }
    ?>

    </table>
</body>
</html>