<?php

ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require "autoload.php";

$form = new Element("form");
$form->action="gravausuario.php";
$form->name = "f1";
$form->method = "post";
$form->class = "form-inline";

$label1 = new Element("label");
$label1->add("Nome: ");

$nome = new Element("input");
$nome->type = "text";
$nome->name = "txtnome";
$nome->size = "100";
$nome->maxlenght = "100";
$nome->class = "form-control";



$label2 = new Element("label");
$label2->add("Email: ");

$email = new Element("input");
$email->type = "text";
$email->name = "txtemail";
$email->size = "100";
$email->maxlenght = "100";
$email->class = "form-control";

$label3 = new Element("label");
$label3->add("Senha: ");

$senha = new Element("input");
$senha->type = "password";
$senha->name = "txtsenha";
$senha->size = "100";
$senha->maxlenght = "100";
$senha->class = "form-control";

$label4 = new Element("label");
$label4->add("Confirme a senha: ");

$senha2 = new Element("input");
$senha2->type = "password";
$senha2->name = "txtsenha2";
$senha2->size = "100";
$senha2->maxlenght = "100";
$senha2->class = "form-control";


$bt1 = new Element("input");
$bt1->type = "submit";
$bt1->value = "Gravar";
$bt1->class = "btn btn-primary";

$bt2 = new Element("input");
$bt2->type = "reset";
$bt2->value = "Limpar";
$bt2->class = "btn btn-danger";


$form->add("<br>");
$form->add($label1);
$form->add("<br>");
$form->add($nome);
$form->add("<br><br>");
$form->add($label2);
$form->add("<br>");
$form->add($email);
$form->add("<br><br>");
$form->add($label3);
$form->add("<br>");
$form->add($senha);
$form->add("<br><br>");
$form->add($label4);
$form->add("<br>");
$form->add($senha2);
$form->add("<br><br><br>");
$form->add($bt1);
$form->add($bt2);

$conteudo = $form->show();

$pagina = new Template("template.html");
$pagina->set("titulo", "Enquete Eletrônica");
$pagina->set("conteudo", "$conteudo");
$pagina->set("rodape", "Sistema Eletrônico ");
echo $pagina->show();
?>