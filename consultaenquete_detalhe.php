<?php

require "autoload.php";

$con= Conexao::Open();
$enquete=new Registro("games",$con);

$tab = new Table();
$tab->class='table table-hover';
$tab->border='1';
$tab->style='background: #fff';
$linha=$tab->addRow();
$linha->style='background: #ccc';
$linha->addCell('Título Jogo');
$linha->addCell('Quantidade');

foreach ($enquete->findCriterio("*,count(*)", "group by jogo") as $key => $dados) {
	$linha=$tab->addRow();
	$linha->addCell($dados[1]);
	$linha->addCell($dados[4]);
}

$conteudo=$tab->show();

$pagina = new Template("template.html");
$pagina->set("titulo", "Consulta Totais");
$pagina->set("conteudo", $conteudo);
$pagina->set("rodape", "Consultas Totais - ");
echo $pagina->show();

?>