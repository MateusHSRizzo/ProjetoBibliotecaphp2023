<?php

namespace DAL;

include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\DAL\conexao.php';
include_once 'C:\xampp\htdocs\ProjetoBibliotecaphp2023\MODEL\Usuario.php';


class dalUsuario
{

    public function SelectUser(string $usuario)
    {
        $sql = "select * from usuario where usuario=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $usuario = new \MODEL\Usuario();

        if ($linha != null) {
            $usuario->setcod($linha['cod']);
            $usuario->setUsuario($linha['usuario']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
        }

        return $usuario;
    }
}