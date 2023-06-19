<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Editora</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background-image: url(../src/fundo.png);">
    <?php include_once '../menu.php'; ?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center blue-grey">
            <h1>CADASTRAR EDITORA</h1>
        </div>

        <div class="row">
            <form action="istEditora.php" method="POST" id="frminsEditora" class="col s12">
                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input id="rua" type="text" name="txtRua">
                    <label for="rua" class="black-text bold">Rua</label>
                </div>
                <div class="input-field col s8">
                    <input id="bairro" type="text" name="txtBairro">
                    <label for="bairro" class="black-text bold">Bairro</label>
                </div>
                <div class="input-field col s8">
                    <input id="cidade" type="text" name="txtCidade">
                    <label for="cidade" class="black-text bold">Cidade</label>
                </div>
                <div class="input-field col s8">
                    <input id="uf" type="text" name="txtUF">
                    <label for="uf" class="black-text bold">UF</label>
                </div>
                <div class="input-field col s8">
                    <input id="tel" type="text" name="txtTel">
                    <label for="tel" class="black-text bold">Telefone</label>
                </div>
                <div class="input-field col s8">
                    <input id="email" type="text" name="txtEmail">
                    <label for="email" class="black-text bold">Email</label>
                </div>
                <div class="input-field col s8">
                    <input id="cnpj" type="text" name="txtCNPJ">
                    <label for="cnpj" class="black-text bold">CNPJ</label>
                </div>
                <div class="blue-grey center col s12">
                    <br>
                    <button class="btn-floating btn-medium waves-effect waves-light green darken-4" type="submit">
                        <i class="material-icons">save</i>
                    </button>
                    <button class="btn-floating btn-medium waves-effect waves-light red darken-4" type="button" onclick="JavaScript:location.href='listaautores.php'">
                        <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <script src="../src/js/ValidationEditora.js"></script>
</body>

</html>