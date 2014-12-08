<?php

namespace EJS\Classes\Form\Types;


use EJS\Classes\Elemento;

class TagTest extends \PHPUnit_Framework_TestCase{

    private $class;
    private $propriedades = [];


    public function assertPreConditions()
    {
        $this->assertTrue(class_exists($classe = 'EJS\Classes\Form\Types\Tag'),"A Classe não existe");
    }

    public function setUp() {
        $this->propriedades = ['class' => 'teste'];
        $this->class = new Tag($this->propriedades, 'teste');
    }

    public function tearDown(){
        unset($this->class);
    }

    public function testVerificaSeInterfaceExiste()
    {
        $this->assertTrue(interface_exists("EJS\Classes\Form\Interfaces\TagInterface"), "A interface nao existe");
    }

    public function testVerificaSeOTipoDaClasseEstaCorreto(){
        $this->assertInstanceOf("EJS\Classes\Form\Types\Tag", $this->class);
    }

    /**
     * @depends testVerificaSeOTipoDaClasseEstaCorreto
     */
    public function testVerificaSeEstaImplementandoAInterface()
    {
        $interface = $this->getMock('EJS\Classes\Form\Interfaces\TagInterface');
        $this->assertTrue($interface instanceof \EJS\Classes\Form\Interfaces\TagInterface);
    }

    /**
     * @depends testVerificaSeEstaImplementandoAInterface
     */
    public function testVerificaSeTipoInterfaceEstaCorreto(){
        $this->assertInstanceOf("EJS\Classes\Form\Interfaces\TagInterface", $this->class);
    }

    /**
     * @depends testVerificaSeTipoInterfaceEstaCorreto
     */
    public function testVerificaSeOsMetodosExistem()
    {
        $this->class->setParametro('teste');
        $this->assertTrue(method_exists($this->class, "setParametro"),"O Método não existe");

        $this->class->getParametro('teste');
        $this->assertTrue(method_exists($this->class, "getParametro"),"O Método não existe");

        $elemento = new Elemento();

        $this->class->createField($elemento);
        $this->assertTrue(method_exists($this->class, "createField"),"O Método não existe");

        $this->class->close($elemento);
        $this->assertTrue(method_exists($this->class, "close"),"O Método não existe");
    }

    /**
     * @depends testVerificaSeOsMetodosExistem
     */
    public function testVerificaSeAsPropriedadesExistem()
    {
        $this->class->setParametro('teste');
        $property = 'param';
        $this->assertTrue(property_exists($this->class, $property), "A propridade não existe");

        $this->class->getParametro();
        $property = 'param';
        $this->assertTrue(property_exists($this->class, $property), "A propriedade não existe");

        $elemento = new Elemento();

        $this->class->createField($elemento);
        $property = 'propriedades';
        $this->assertTrue(property_exists($this->class, $property),"A propriedade não existe");
    }

    public function testVerificaGetterESetters(){
        $this->class->setParametro('teste');
        $this->assertEquals('teste', $this->class->getParametro());
    }

    public function testVerificaCreateField(){
        $form = [
            'class' => 'form',
            'name' => 'formName',
            'action' => 'action.php',
            'method' => 'post'
        ];
        $elemento = new Elemento();
        $teste = new Tag($form, 'form');
        $teste->createField($elemento);

        $this->assertEquals(null, $teste->createField($elemento));
    }

    public function testVerificaClose(){
        $form = [
            'class' => 'form',
            'name' => 'formName',
            'action' => 'action.php',
            'method' => 'post'
        ];
        $elemento = new Elemento();
        $teste = new Tag($form, 'form');
        $teste->close($elemento);

        $this->assertEquals(null, $teste->close($elemento));
    }
} 