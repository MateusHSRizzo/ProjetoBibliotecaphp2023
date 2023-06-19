<?php
include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Livros.php';
$cod = $_GET['cod'];

$bll = new  \BLL\bllLivros();
$livro = $bll->Selectcod($cod);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php'; ?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center blue-grey">
            <h1>EDITAR CADASTRO: LIVRO</h1>
        </div>

        <div class="row">
            <form action="edLivro.php" method="POST" id="frmedLivro" class="col s12">
                <div class="input-field col s8">
                    <label for="cod" style="font-size: 25px; font-weight: bold; color: black;">COD: <?php echo $livro->getcod(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtCOD" value=<?php echo $cod; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome" value="<?php echo $livro->getnome() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input id="npaginas" type="text" name="txtNpaginas" value="<?php echo $livro->getn_paginas() ?>">
                    <label for="npaginas" class="black-text bold">N. de Paginas</label>
                </div>
                <div class="input-field col s8">
                    <input id="anolancamento" type="text" name="txtDatalancamento" value="<?php echo $livro->getdata_de_lancamento() ?>">
                    <label for="datalancamento" class="black-text bold">Data de Lançamento</label>
                </div>
                <div class="input-field col s8">
                    <input id="autor" type="text" name="txtAutor" value="<?php echo $livro->getautor() ?>">
                    <label for="autor" class="black-text bold">Autor</label>
                </div>
                <div class="input-field col s8">
                    <input id="editora" type="text" name="txtEditora" value="<?php echo $livro->geteditora() ?>">
                    <label for="editora" class="black-text bold">Editora</label>
                </div>
                <div class="blue-grey center col s12">
                    <br>
                    <button class="btn-floating btn-medium waves-effect waves-light green darken-4" type="submit">
                        <i class="material-icons">save</i>
                    </button>
                    <button class="btn-floating btn-medium waves-effect waves-light red darken-4" type="button" onclick="JavaScript:location.href='listalivros.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <script src="../src/js/ValidationLivros.js"></script>
</body>
</html>