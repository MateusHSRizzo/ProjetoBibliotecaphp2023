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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <title>Lista de Livros</title>
</head>
<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php' ?>
    <h1 class="center">LIVROS</h1>

    <table class="striped blue-grey">
    <tr style="font-size: 20px;">
        <th class="center">COD</th>
        <th class="center">NOME</th>
        <th class="center">N. DE PAGINAS</th>
        <th class="center">ANO DE LANÇAMENTO</th>
        <th class="center">AUTOR</th>
        <th class="center">EDITORA</th>
        <th></th>
    </tr>

    <?php
    if($lstlivros != null){
        foreach($lstlivros as $livro){  
    ?>
        <tr style="font-size: 17px;">
            <td class="center" style="font-weight: bold;"><?= $livro->getcod();?></td>
            <td class="center"><?= $livro->getnome();?></td>
            <td class="center"><?= $livro->getn_paginas();?></td>
            <td class="center"><?= $livro->getdata_de_lancamento();?></td>
            <td class="center"><?= $livro->getautor();?></td>
            <td class="center"><?= $livro->geteditora();?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue darken-4" onclick="JavaScript:location.href='edit_livro.php?cod=' + <?php echo $livro->getcod(); ?>"><i class="material-icons">edit</i></a>
                <a class="btn-floating btn-small waves-effect waves-light red darken-4" onclick="JavaScript: remover(<?php echo $livro->getcod(); ?>);"><i class="material-icons">delete</i></a>
            </td>
        </tr>
    <?php
            }
        }
    ?>
    </table>
    <a class="btn-floating btn-medium waves-effect waves-light green darken-4" style="margin: 15px;" href="insert_livro.php"><i class="material-icons">add</i></a>

    <script>
        function remover(cod) {
            if (confirm('Excluir o Livro ' + cod + '?')) {
                location.href = 'delete_livro.php?cod=' + cod;
            }
        }
    </script>
</body>
</html>