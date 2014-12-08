<?php

namespace EJS\Classes;
use EJS\Classes\Elemento;

class ElementoTest extends \PHPUnit_Framework_TestCase{

    private $class;

    public function assertPreConditions(){
        $this->assertTrue(class_exists("EJS\Classes\Elemento"),"A classe não existe");
    }

    public function setUp(){
        $this->class = new Elemento();
    }

    public function tearDown(){
        unset($this->class);
    }

    public function testVerificaSeTipoDaClasseEstaCorreto(){
        $this->assertInstanceOf('EJS\Classes\Elemento', $this->class);
    }

    /**
     * @depends testVerificaSeTipoDaClasseEstaCorreto
     */
    public function testVerificaSeAClasseImplementaInterface(){
        $interface = $this->getMock('EJS\Classes\Form\Interfaces\ElementoInterface');
        $this->assertTrue($interface instanceof \EJS\Classes\Form\Interfaces\ElementoInterface);
    }

    /**
     * @depends testVerificaSeAClasseImplementaInterface
     */
    public function testVerificaSeTipoDaInterfaceEstaCorreto(){
        $this->assertInstanceOf("EJS\Classes\Form\Interfaces\ElementoInterface", $this->class);
    }

    public function testVerificaSeMetodosExistem(){

        $this->class->abreTagElemento();
        $this->assertTrue(method_exists($this->class, "abreTagElemento"), "O Método não existe");

        $this->class->fechaTagElemento();
        $this->assertTrue(method_exists($this->class, "fechaTagElemento"), "O Método não existe");

        $this->class->render();
        $this->assertTrue(method_exists($this->class, "render"), "O Método não existe");
    }
} 