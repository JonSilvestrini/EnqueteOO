<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require "autoload.php";

$path = $_POST['path'];

if ($_POST['email']==''){
    header("Location: login.php?erro=vazio&campo=Email");
    exit;
}

if ($_POST['senha']=='') {
    header("Location: login.php?erro=vazio&campo=Senha&email=$_POST[email]");
    exit;
}

$senha=sha1($_POST['senha']);
$con= Conexao::Open();
$usuario=new Registro("usuarios", $con);
$row=$usuario->findCriterio("*", "where email='$_POST[email]' and senha='$senha'");

foreach ($row as $arr=>$linha){
    $codigo = $linha['codigo'];
    $nome = $linha['nome'];
    $email = $linha['email'];
}

if ($email) {
    $sessao=new Sessao();
    $sessao->Add("codigo", $codigo);
    $sessao->Add("nome", $nome);
    $sessao->Add("email", $email);
    
    header("Location:$path");
} else {
    header("Location: login.php?erro=invalido&campo=Senha");
    exit;
}
?>