<?php

    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Editora.php';
    $bll = new \BLL\bllEditora();
    $lsteditoras = $bll->Select();

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
    <h1>Lista De Editoras</h1>

    <table class="striped grey">
    <tr>
        <th>COD</th>
        <th>NOME</th>
        <th>RUA</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th>ESTADO</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th>CNPJ</th>
    </tr>

    <?php
    if($lsteditoras != null){
        foreach($lsteditoras as $editora){  
    ?>
        <tr>
            <td><?= $editora->getcod();?></td>
            <td><?= $editora->getnome();?></td>
            <td><?= $editora->getrua();?></td>
            <td><?= $editora->getbairro();?></td>
            <td><?= $editora->getcidade();?></td>
            <td><?= $editora->getestado();?></td>
            <td><?= $editora->gettelefone();?></td>
            <td><?= $editora->getemail();?></td>
            <td><?= $editora->getcnpj();?></td>
        </tr>
    <?php
            }
        }
    ?>

    </table>
</body>
</html>