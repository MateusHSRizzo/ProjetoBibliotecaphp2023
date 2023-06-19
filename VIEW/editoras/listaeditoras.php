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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Lista de Editoras</title>
</head>
<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php' ?>
    <h1 class="center">EDITORAS</h1>

    <table class="striped blue-grey">
    <tr style="font-size: 20px;">
        <th class="center">COD</th>
        <th class="center">NOME</th>
        <th class="center">RUA</th>
        <th class="center">BAIRRO</th>
        <th class="center">CIDADE</th>
        <th class="center">UF</th>
        <th class="center">TELEFONE</th>
        <th class="center">EMAIL</th>
        <th class="center">CNPJ</th>
        <th></th>
    </tr>

    <?php
    if($lsteditoras != null){
        foreach($lsteditoras as $editora){  
    ?>
        <tr style="font-size: 17px;">
            <td class="center" style="font-weight: bold;"><?= $editora->getcod();?></td>
            <td class="center"><?= $editora->getnome();?></td>
            <td class="center"><?= $editora->getrua();?></td>
            <td class="center"><?= $editora->getbairro();?></td>
            <td class="center"><?= $editora->getcidade();?></td>
            <td class="center"><?= $editora->getestado();?></td>
            <td class="center"><?= $editora->gettelefone();?></td>
            <td class="center"><?= $editora->getemail();?></td>
            <td class="center"><?= $editora->getcnpj();?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue darken-4" onclick="JavaScript:location.href='edit_editora.php?cod=' + <?php echo $editora->getcod(); ?>"><i class="material-icons">edit</i></a>
                <a class="btn-floating btn-small waves-effect waves-light red darken-4" onclick="JavaScript: remover(<?php echo $editora->getcod(); ?>);"><i class="material-icons">delete</i></a>
            </td>
        </tr>
    <?php
            }
        }
    ?>
    </table>
    <a class="btn-floating btn-medium waves-effect waves-light green darken-4" style="margin: 15px;" href="insert_editora.php"><i class="material-icons">add</i></a>

    <script>
        function remover(cod) {
            if (confirm('Excluir o Editora ' + cod + '?')) {
                location.href = 'delete_editora.php?cod=' + cod;
            }
        }
    </script>
</body>
</html>