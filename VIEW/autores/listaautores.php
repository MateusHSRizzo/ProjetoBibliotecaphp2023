<?php

    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Autores.php';
    $bll = new \BLL\bllAutor();
    $lstautores = $bll->Select();

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
    <h1>Lista De Autores</h1>

    <table class="striped grey">
    <tr>
        <th>COD</th>
        <th>NOME</th>
    </tr>

    <?php
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
    </table>
</body>
</html>