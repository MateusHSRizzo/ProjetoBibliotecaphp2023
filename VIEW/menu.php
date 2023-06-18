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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Sistema Prestação de Serviços de Maquinas</title>
</head>

<body>
    <nav>
<<<<<<< HEAD
        <div class="nav-wrapper blue-grey darken-4">
            <a href="#" class="brand-logo right">
                <img src="./src/trator.jpg"  width="50" height="65">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/livros/listalivros.php">Livros</a></li>
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/editoras/listaeditoras.php">Editora</a></li>
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/autores/listaautores.php">Autores</a></li>
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/pessoas/listapessoas.php">Clientes</a></li>
=======
        <div class="nav-wrapper brown darken-1">
            <a href="#" class="brand-logo right">
                <img src="../imagens/trator.jpg"  width="50" height="65">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="\ProjetoBibliotecaphp2023\VIEW\operador\lstoperador2.php">Operador</a></li>
                <li><a href="../operador/lstoperador2.php">Máquinas</a></li>
                <li><a href="collapsible.html">Equipamentos</a></li>
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/area/lstarea.php">Area</a></li>
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
                <li><a href="/ProjetoBibliotecaphp2023/VIEW/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>