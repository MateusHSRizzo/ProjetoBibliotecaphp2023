<?php

<<<<<<< HEAD
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Autores.php';
    $bll = new \BLL\bllAutor();
    $lstautores = $bll->Select();

=======
use DAL\Conexao;

    include './DAL/conexao.php';
    $sql = "select * from autores;";
    $dal = new \dal\dalAutores();
    $listaautores = $dal->Select();
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
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
            
<<<<<<< HEAD
    <title>Lista de Livros</title>
</head>
<body>
    <?php include_once '../menu.php' ?>
    <h1>Lista De Autores</h1>

    <table class="striped grey">
=======
    <title>Lista de Autores</title>
</head>
<body>
    <h1>Lista De Autores Dos Livros</h1>

    <table class="striped green">
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    <tr>
        <th>COD</th>
        <th>NOME</th>
    </tr>

    <?php
<<<<<<< HEAD
    if($lstautores != null){
        foreach($lstautores as $autor){  
    ?>
        <tr>
            <td><?= $autor->getcod();?></td>
            <td><?= $autor->getnome();?></td>
        </tr>
    <?php
            }
        }
    ?>
=======
        foreach($listalivro as $livros){

    ?>
        <tr>
            <td><?php echo $livros->getcod();?></td>
            <td><?php echo $livros->getnome();?></td>
        </tr>
    <?php
        }
    ?>

>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    </table>
</body>
</html>