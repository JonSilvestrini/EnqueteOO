<?php

require 'autoload.php';

$con = Conexao::Open();
$enquete = new Registro("usuario",$con);

if($enquete->delete($_GET['codigo'])){
	$pagina = new Template('template.html');
	$pagina->set("conteudo", new Msg("Usuário deletado!"));
	echo $pagina->show();
	header("Refresh: 3; URL=cadusuario.php");
}