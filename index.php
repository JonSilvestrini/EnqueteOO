<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<meta charset="UTF-8">
	
	</head>
	<body>
		<?php
			ini_set('display_errors',1);
			ini_set('display_startup_erros',1);
			error_reporting(E_ALL);
		
			require "autoload.php";
			
			$form = new Element("form");
			$form->action="gravaenquete.php";
			$form->name="f1";
			$form->method="post";
			$form->class="form-inline";
			
			$label1 = new Element("label");
			$label1->add("Qual o jogo que você mais gosta:");
			
			$br = new Element("br");
			
			$select = new Element("select");
			$select->name="txtjogo";
			$select->class="form-control";
			
			$option1 = new Element("option");
			$option1->value="";
			$option1->add("Selecione...");
			
			$option2 = new Element("option");
			$option2->value="Metal Gear";
			$option2->add("Metal Gear");
			
			$option3 = new Element("option");
			$option3->value="CS GO";
			$option3->add("CS GO");
			
			$option4 = new Element("option");
			$option4->value="To The Moon";
			$option4->add("To The Moon");
			
			$option5 = new Element("option");
			$option5->value="Tetris";
			$option5->add("Tetris");
			
			$option6 = new Element("option");
			$option6->value="Undertale";
			$option6->add("Undertale");
			
			$option7 = new Element("option");
			$option7->value="Castelo da Vania";
			$option7->add("Castelo da Vania");
			
			$select->add($option1);
			$select->add($option2);
			$select->add($option3);
			$select->add($option4);
			$select->add($option5);
			$select->add($option6);
			$select->add($option7);
			
			$label2 = new Element("label");
			$label2->add("Sugestão de outro jogo:");
			
			$bt1 = new Element("input");
			$bt1->type="submit";
			$bt1->value="Gravar";
			$bt1->class="btn btn-primary";
			
			$bt2 = new Element("input");
			$bt2->type="reset";
			$bt2->value="Limpar";
			$bt2->class="btn btn-primary";
			
			$nome = new Element("input");
			$nome->type="text";
			$nome->name="txtsugestao";
			$nome->size="40";
			$nome->maxlenght="100";
			$nome->class="form-control";
			
			$form->add($label1);
			$form->add($br);
			$form->add($select);
			$form->add("<br><br>");
			$form->add($label2);
			$form->add("<br>");
			$form->add($nome);
			$form->add($bt1);
			$form->add($bt2);
			
			$conteudo=$form->show();
			
			$pagina = new Template("template.html");
			$pagina->set("titulo", "Enquete Eletrônica");
			$pagina->set("conteudo", "$conteudo");
			$pagina->set("rodape", "Sistema Eletrônico ");
			echo $pagina->show();
			
		?>
	</body>
</html>
