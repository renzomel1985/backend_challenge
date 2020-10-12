<?php
namespace Models;

class BagPack
{

    private $name;
    private $items = [];
    private $totalItems;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function addItem($item){
        $this->items[] = $item;
    }
    public function getItems(){
        return $this->items;
    }

    public function getTotalItems(){
        return count($this->items);
    }

}