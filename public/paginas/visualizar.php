<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Teste de Aceitação</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="container">
    <h3>Formulário Básico - TDD</h3>
<?php

use EJS\Classes\Elemento;
use EJS\Classes\Form\Types\Tag;

$elemento = new Elemento();
$element1 = clone $elemento;
$element2 = clone $elemento;
$element3 = clone $elemento;
$element4 = clone $elemento;
$element5 = clone $elemento;

$formulario = [
    'class' => 'form-horizontal',
    'name' => 'form-contato',
    'action' => 'action.php',
    'method' => 'post'
];
$formulario = new Tag($formulario, 'form');
$formulario->createField($elemento);

$fieldset = [];
$fieldset = new Tag($fieldset, 'fieldset');
$fieldset->createField($element1);

$legenda = [];
$legenda = new Tag($legenda, 'legend');
$legenda->createField($element1);
$legenda->setParametro('Produtos Cadastrados');
echo $legenda->getParametro();
$legenda->close($element1);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element1);

$label = [];
$label = new Tag($label, 'label');
$label->createField($element1);
$label->setParametro('Nome: ');
echo $label->getParametro();
$label->close($element1);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element1);

$input = [
    'class' => 'form-control',
    'type' => 'text',
    'name' => 'nome',
    'value' => 'Pneu Aro 13'
];
$input = new Tag($input, 'input');
$input->createField($element1);

$div->close($element1);
$div->close($element1);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element2);

$label = [];
$label = new Tag($label, 'label');
$label->createField($element2);
$label->setParametro('Valor: ');
echo $label->getParametro();
$label->close($element2);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element2);

$input = [
    'class' => 'form-control',
    'type' => 'text',
    'name' => 'valor',
    'value' => 180.0
];
$input = new Tag($input, 'input');
$input->createField($element2);

$div->close($element2);
$div->close($element2);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element3);

$label = [];
$label = new Tag($label, 'label');
$label->createField($element3);
$label->setParametro('Descrição: ');
echo $label->getParametro();
$label->close($element3);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element3);

$input = [
    'class' => 'form-control',
    'type' => 'text',
    'name' => 'descricao',
    'value' => 'Pneu Aro 13'
];
$input = new Tag($input, 'input');
$input->createField($element3);

$div->close($element3);
$div->close($element3);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element4);

$label = [];
$label = new Tag($label, 'label');
$label->createField($element4);
$label->setParametro('Categoria: ');
echo $label->getParametro();
$label->close($element4);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element4);

$dropdown = [];
$dropdown = new Tag($dropdown, 'select');
$dropdown->createField($element4);

$opcao = [];
$opcao = new Tag($opcao, 'option');
$opcao->createField($element4);
$opcao->setParametro('Aro 13');
echo $opcao->getParametro();
$opcao->close($element4);

$opcao->createField($element4);
$opcao->setParametro('Aro 14');
echo $opcao->getParametro();
$opcao->close($element4);

$dropdown->close($element4);

$div->close($element4);
$div->close($element4);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element5);

$div = [];
$div = new Tag($div, 'div');
$div->createField($element5);

$input = [
    'class' => 'btn btn-primary',
    'type' => 'submit',
    'name' => 'enviar',
    'value' => 'Enviar Dados'
];
$input = new Tag($input, 'input');
$input->createField($element5);

$div->close($element5);
$div->close($element5);

$fieldset->close($element1);
$formulario->close($elemento);

?>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
