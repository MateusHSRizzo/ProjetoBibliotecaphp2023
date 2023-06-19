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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>   
    <title>Lista de Autores</title>
</head>
<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php' ?>
    <h1 class="center">AUTORES</h1>

    <table class="striped blue-grey">
    <tr style="font-size: 20px;">
        <th class="center">COD</th>
        <th>NOME</th>
        <th></th>
    </tr>

    <?php
    if($lstautores != null){
        foreach($lstautores as $autor){  
    ?>
        <tr style="font-size: 17px;">
            <td class="center" style="font-weight: bold;"><?= $autor->getcod();?></td>
            <td><?= $autor->getnome();?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue darken-4" onclick="JavaScript:location.href='edit_autor.php?cod=' + <?php echo $autor->getcod(); ?>"><i class="material-icons">edit</i></a>
                <a class="btn-floating btn-small waves-effect waves-light red darken-4" onclick="JavaScript: remover(<?php echo $autor->getcod(); ?>);"><i class="material-icons">delete</i></a>
            </td>
        </tr>
    <?php
            }
        }
    ?>
    </table>
    <a class="btn-floating btn-medium waves-effect waves-light green darken-4" style="margin: 15px;" href="insert_autor.php"><i class="material-icons">add</i></a>

    <script>
        function remover(cod) {
            if (confirm('Excluir o Autor ' + cod + '?')) {
                location.href = 'delete_autor.php?cod=' + cod;
            }
        }
    </script>
</body>
</html>