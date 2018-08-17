<?php
require "classes/Element.class.php";

$nome = new Element("input");
$nome->type="text";
$nome->name="txtsugestao";
$nome->size="40";
$nome->maxlength="100";
$nome->class="form-control";
//$sugestao->show();

$form = new Element("form");
$form->action="grava.php";
$form->method="post";
$form->name="form1";
$form->add($nome);
$form->show();
?>

<input type="text" autofocus name="txtsugestao" size="40" maxlength="100" class="form-control">