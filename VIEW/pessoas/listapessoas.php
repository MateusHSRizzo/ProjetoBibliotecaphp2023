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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Lista de Clientes</title>
</head>
<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php' ?>
    <h1 class="center">CLIENTES</h1>

    <table class="striped blue-grey">
    <tr style="font-size: 20px;">
        <th class="center">COD</th>
        <th class="center">NOME</th>
        <th class="center">CPF</th>
        <th class="center">TELEFONE</th>
        <th class="center">RUA</th>
        <th class="center">BAIRRO</th>
        <th></th>
    </tr>

    <?php
    if($lstclientes != null){
        foreach($lstclientes as $cliente){  
    ?>
        <tr style="font-size: 17px;">
            <td class="center" style="font-weight: bold;"><?= $cliente->getcod();?></td>
            <td class="center"><?= $cliente->getnome();?></td>
            <td class="center"><?= $cliente->getcpf();?></td>
            <td class="center"><?= $cliente->gettelefone();?></td>
            <td class="center"><?= $cliente->getrua();?></td>
            <td class="center"><?= $cliente->getbairro();?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue darken-4" onclick="JavaScript:location.href='edit_pessoa.php?cod=' + <?php echo $cliente->getcod(); ?>"><i class="material-icons">edit</i></a>
                <a class="btn-floating btn-small waves-effect waves-light red darken-4" onclick="JavaScript: remover(<?php echo $cliente->getcod(); ?>);"><i class="material-icons">delete</i></a>
            </td>
        </tr>
    <?php
            }
        }
    ?>
    </table>
    <a class="btn-floating btn-medium waves-effect waves-light green darken-4" style="margin: 15px;" href="insert_pessoa.php"><i class="material-icons">add</i></a>

    <script>
        function remover(cod) {
            if (confirm('Excluir o Cliente ' + cod + '?')) {
                location.href = 'delete_pessoa.php?cod=' + cod;
            }
        }
    </script>
</body>
</html>