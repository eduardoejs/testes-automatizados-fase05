<?php
namespace EJS\Classes\Form\Interfaces;


use EJS\Classes\Elemento;

interface TagInterface {

    public function setParametro($param);
    public function getParametro();
    public function createField(Elemento $elemento);
    public function close(Elemento $elemento);
} 