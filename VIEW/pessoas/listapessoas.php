<?php

    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Pessoas.php';
    $bll = new \BLL\bllPessoas();
    $lstclientes = $bll->Select();

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
        <th>CPF</th>
        <th>TELEFONE</th>
        <th>RUA</th>
        <th>BAIRRO</th>
    </tr>

    <?php
    if($lstclientes != null){
        foreach($lstclientes as $cliente){  
    ?>
        <tr>
            <td><?= $cliente->getcod();?></td>
            <td><?= $cliente->getnome();?></td>
            <td><?= $cliente->getcpf();?></td>
            <td><?= $cliente->gettelefone();?></td>
            <td><?= $cliente->getrua();?></td>
            <td><?= $cliente->getbairro();?></td>
        </tr>
    <?php
            }
        }
    ?>
    </table>
</body>
</html>