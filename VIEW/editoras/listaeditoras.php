<?php

<<<<<<< HEAD
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Editora.php';
    $bll = new \BLL\bllEditora();
    $lsteditoras = $bll->Select();

=======
use DAL\Conexao;

    include './DAL/conexao.php';
    $sql = "select * from editoras;";
    $dal = new \dal\dalEditora();
    $listalivros = $dal->Select();
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
=======
    <title>Lista de Editoras</title>
</head>
<body>
    <h1>Lista de Editoras dos Livros Disponiveis</h1>

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
            <td><?php echo $livros->getgenero();?></td>
            <td><?php echo $livros->getdata_de_lancamento();?></td>
            <td><?php echo $livros->getautor();?></td>
            <td><?php echo $livros->geteditora();?></td>
        </tr>
    <?php
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
        }
    ?>

    </table>
</body>
</html>