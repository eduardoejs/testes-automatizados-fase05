<?php

namespace EJS\Classes\Form\Interfaces;


class TagInterfaceTest extends \PHPUnit_Framework_TestCase{

    public function testVerificaSeInterfaceExiste(){
        $this->assertTrue(interface_exists('EJS\Classes\Form\Interfaces\TagInterface'), "A interface não existe");
    }
} 