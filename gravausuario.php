<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
require "autoload.php";

$con = Conexao::Open();
$enquete = new Registro("usuarios", $con);
$enquete->codigo = "0";
$enquete->nome = $_POST['txtnome'];
$enquete->email = $_POST['txtemail'];
$enquete->senha = $_POST['txtsenha'];


if ($enquete->senha != $_POST['txtsenha2']) {
	$pagina = new Template("template.html");
	$pagina->set("titulo", "Erro.");
	$pagina->set("conteudo", new Msg("Senhas diferentes"));
	$pagina->set("rodape", "Enquete");
	echo $pagina->show();
	header("Refresh: 3; URL=cadusuario.php");
	exit();
}
//$enquete->save();

$enquete->senha = sha1($enquete->senha);

if ($enquete->save()) {
	$pagina = new Template("template.html");
	$pagina->set("titulo", "Obrigado.");
	$pagina->set("conteudo", new Msg("Usuário Cadastrado com sucesso!"));
	$pagina->set("rodape", "Enquete");
	echo $pagina->show();
	header("Refresh: 3; URL=index.php");
}
?>