<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Pagina Inicial</title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../VIEW/css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
    <style>
        .parallax-container {
            height: 43.7vmax;
        }
        .botao{
            padding: 15;
            margin: 20px;
        }
        .txt{
            padding: 25px;
            color: white;
        }
    </style>
</head>
<body style="background-image: url(src/fundo.png);">
    <div class="had-container">
        <div class="parallax-container">
            <div class="row"><br>
                <div class="col m8 s8 offset-m2 offset-s2 center">
                    <h4 class="truncate bg-card-user">
                        <div class="row blue-grey darken-4">
                            <h4 class="txt">BIBLIOTECA DIGITAL</h4>
                            <div class="botao">
                                <a class="waves-effect waves-light btn-large blue-grey" href="/ProjetoBibliotecaphp2023/VIEW/livros/listalivros.php"><i class="material-icons left">book</i>Livros</a>
                            </div>
                            <div class="botao">
                                <a class="waves-effect waves-light btn-large blue-grey" href="/ProjetoBibliotecaphp2023/VIEW/editoras/listaeditoras.php"><i class="material-icons left">local_library</i>Editoras</a>
                            </div>
                            <div class="botao">
                                <a class="waves-effect waves-light btn-large blue-grey" href="/ProjetoBibliotecaphp2023/VIEW/autores/listaautores.php"><i class="material-icons left">group</i>Autores</a>
                            </div>
                            <div class="botao">
                                <a class="waves-effect waves-light btn-large blue-grey" href="/ProjetoBibliotecaphp2023/VIEW/pessoas/listapessoas.php"><i class="material-icons left">streetview</i>Clientes</a>
                            </div>
                            <div class="botao">
                                <a class="waves-effect waves-light btn-large blue-grey" href="/ProjetoBibliotecaphp2023/VIEW/logout.php"><i class="material-icons left">arrow_back</i>Logout</a>
                            </div>
                        </div>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
