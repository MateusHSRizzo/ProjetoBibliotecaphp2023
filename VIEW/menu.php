<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: /index.php");   
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Sistema Prestação de Serviços de Maquinas</title>
</head>
<body>
    <nav class="blue-grey darken-4">
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/PaginaPrincipal.php">Pagina Inicial</a></li>
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/livros/listalivros.php">Livros</a></li>
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/editoras/listaeditoras.php">Editora</a></li>
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/autores/listaautores.php">Autores</a></li>
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/pessoas/listapessoas.php">Clientes</a></li>
            <li><a href="/ProjetoBibliotecaphp2023/VIEW/logout.php">Logout</a></li>
        </ul>
        </div>
    </nav>
</body>
</html>