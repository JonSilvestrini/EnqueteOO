<?php
require "classes/Element.class.php";

$sugestao = new Element("input");
$sugestao->type="text";
$sugestao->name="txtsugestao";
$sugestao->size="40";
$sugestao->maxlength="100";
$sugestao->class="form-control";
//$sugestao->show();

$form = new Element("form");
$form->action="grava.php";
$form->method="post";
$form->name="form1";
$form->add($sugestao);
$form->show();
?>

<input type="text" autofocus name="txtsugestao" size="40" maxlength="100" class="form-control">