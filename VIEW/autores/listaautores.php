<?php

use DAL\Conexao;

    include './DAL/conexao.php';
    $sql = "select * from autores;";
    $dal = new \dal\dalAutores();
    $listaautores = $dal->Select();
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
            
    <title>Lista de Autores</title>
</head>
<body>
    <h1>Lista De Autores Dos Livros</h1>

    <table class="striped green">
    <tr>
        <th>COD</th>
        <th>NOME</th>
    </tr>

    <?php
        foreach($listalivro as $livros){

    ?>
        <tr>
            <td><?php echo $livros->getcod();?></td>
            <td><?php echo $livros->getnome();?></td>
        </tr>
    <?php
        }
    ?>

    </table>
</body>
</html>