<?php
include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\BLL\BLL_Usuario.php';
include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Usuario.php';

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

echo "Usuario: " . $usuario . "</br>";
echo "Senha: " . md5($senha) . "</br>" . "</br>";

$bll = new  \BLL\bllUsuario();

$objUsuario = new \MODEL\Usuario();

$objUsuario = $bll->SelectUser($usuario);
<<<<<<< HEAD
=======
echo 'aqui';
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3

if ($objUsuario != null) {
    if (md5($senha) == $objUsuario->getSenha()){
        session_start();
        $_SESSION['login'] =  $objUsuario->getUsuario() ;
<<<<<<< HEAD
        header("location:livros/listalivros.php");
=======
        header("location:menu.php");
>>>>>>> e30f33d1883cf1fd03fee1439638bef7b7b10fb3
    }
    else header("location:index.php");
}
else echo "usuario não encontrado";

?>