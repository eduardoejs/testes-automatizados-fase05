<?php

namespace EJS\Classes;

use EJS\Classes\Form\Interfaces\ElementoInterface;

class Elemento implements ElementoInterface{

    public $tag;
    private $propriedades;

    public function __set($nome, $value){
        $this->propriedades[$nome] = $value;
    }

    public function abreTagElemento()
    {
        echo "<{$this->tag}";
        if ($this->propriedades){
            foreach ($this->propriedades as $nome=>$valor){
                echo " {$nome}=\"{$valor}\"";
            }
        }
        echo '>';
    }

    public function fechaTagElemento()
    {
        echo "</{$this->tag}>\n";
    }

    public function render()
    {
        $this->abreTagElemento();
    }
} 
