<?php
namespace Models;

class Item
{
    private $name;
    private $categoria;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

}