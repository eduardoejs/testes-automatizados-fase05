<?php
namespace EJS\Classes\Form\Types;

use EJS\Classes\Elemento;
use EJS\Classes\Form\Interfaces\TagInterface;

class Tag implements TagInterface{

    public $propriedades = [];
    public $param;
    public $nome;

    function __construct($properties, $nome)
    {
        $this->propriedades = $properties;
        $this->nome = $nome;
    }

    function getParametro() {
        return $this->param;
    }

    function setParametro($param) {
        $this->param = $param;
        return $this;
    }

    public function createField(Elemento $element)
    {
        $tag = $element;
        $tag->tag = $this->nome;

        if(isset($this->propriedades['class'])){
            $tag->class = $this->propriedades['class'];
        }
        if(isset($this->propriedades['type'])){
            $tag->type = $this->propriedades['type'];
        }
        if(isset($this->propriedades['name'])){
            $tag->name = $this->propriedades['name'];
        }
        if(isset($this->propriedades['value'])){
            $tag->value = $this->propriedades['value'];
        }
        if(isset($this->propriedades['action'])){
            $tag->action = $this->propriedades['action'];
        }
        if(isset($this->propriedades['method'])){
            $tag->method = $this->propriedades['method'];
        }
        $tag->render();
    }

    public function close(Elemento $element)
    {
        $tag = $element;
        $tag->tag = $this->nome;
        $tag->fechaTagElemento();
    }

}