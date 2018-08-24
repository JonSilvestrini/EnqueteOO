<?php

require 'autoload.php';

$con = Conexao::Open();
$enquete = new Registro("usuario",$con);

if($enquete->delete($_GET['codigo'])){
	$pagina = new Template('template.html');
	$pagina->set("titulo", "Exclusão de usuários");
	$pagina->set("conteudo", new Msg("Usuário deletado!"));
	$pagina->set("rodape", "Exclusão de usuários");
	echo $pagina->show();
	header("Refresh: 3; URL=cadusuario.php");
}