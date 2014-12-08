<?php

namespace EJS\WebTest;

class InterfaceGraficaTest extends \PHPUnit_Extensions_Selenium2TestCase{

    public function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost:8080/');
    }

    public function testVerificaTitle()
    {
        $this->url('/');
        $titulo = "Teste de Aceitação";
        $this->assertEquals($titulo, $this->title());
    }

    public function testVerificaInputs()
    {
        $this->url('/');

        $form = $this->byName('form-contato');
        $produto = $this->byName('nome');
        $valor = $this->byName('valor');
        $descricao = $this->byName('descricao');
        $categoria = $this->byTag('select');
        $botao = $this->byName('enviar');

        $this->assertEquals('Pneu Aro 13', $produto->value());
        $this->assertEquals(180, $valor->value());
        $this->assertEquals('Pneu Aro 13', $descricao->value());
        $this->assertEquals('Aro 13', $categoria->value());
        $this->assertEquals('Enviar Dados', $botao->value());
    }

    public function testVerificaSubmit()
    {
        $this->url('/');
        $form = $this->byCssSelector('form');
        $action = $form->attribute('action');
        $this->assertContains('action.php', $action);
        $this->assertEquals('http://localhost:8080/action.php', $action);
        $this->assertTrue($this->byName('enviar')->enabled());
    }
} 