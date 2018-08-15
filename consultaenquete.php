<?php
	require "autoload.php";
	
	$con= Conexao::Open();
	$enquete=new Registro("games", $con);
	
	$tab = new Table();
	$tab->class='table table-hover';
	$tab->border='1';
	$linha=$tab->addRow();
	$linha->addCell('Código');
	$linha->addCell('Títilo do Jogo');
	$linha->addCell('Sugestão');
	
	foreach ($enquete->findAll() as $key => $dados){
		$linha=$tab->addRow();
		$linha->addCell($dados[0]);
		$linha->addCell($dados[1]);
		$linha->addCell($dados[2]);
	}
	
	$conteudo = $tab->show();
	
	$pagina = new Template("template.html");
	$pagina->set("titulo", "Consulta Enquete");
	$pagina->set("conteudo", "$conteudo");
	$pagina->set("rodape", "Consulta Enquete");
	echo $pagina->show();
?>
