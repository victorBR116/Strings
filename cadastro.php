<?php

require 'autoload.php';

use App\Contato;
use App\Usuario;

$contato = new Contato($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);
$usuario = new Usuario($_POST['nome'], $_POST['senha'], $_POST['genero']);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>






<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p><?php echo $usuario->getTratamento(); ?>, seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?php echo $usuario->getNome(); ?> </li>
    <li class="list-group-item">Sobrenome: <?php echo $usuario->getSobrenome();?></li>
    <li class="list-group-item">Usuário:<?php echo  $contato->getUsuario(); ?> </li>
    <li class="list-group-item">Senha:<?php echo $usuario->getSenha(); ?> </li>
    <li class="list-group-item">Telefone:<?php echo $contato->getTelefone(); ?> </li>
    <li class="list-group-item">E-mail:<?php echo $contato->getEmail(); ?> </li>
    <li class="list-group-item">Endereço:<?php echo $contato->getEnderecoCep(); ?> </li>
</ul>
</div>
</body>
</html>
