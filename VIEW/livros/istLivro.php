<?php
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Livros.php';
    include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Livros.php';

    $livro = new MODEL\Livros(); 
    
    $livro->setnome($_POST['txtNome']);
    $livro->setn_paginas($_POST['txtNpaginas']);
    $livro->setdata_de_lancamento($_POST['txtAnolancamento']);
    $livro->setautor($_POST['txtAutor']);
    $livro->seteditora($_POST['txtEditora']);

    $bll = new \BLL\bllLivros(); 
    $bll->Insert($livro); 
    
    header("location: listalivros.php");
?>