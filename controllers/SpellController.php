<?php
namespace Controllers;

use Models\Bag;
use Models\BagPack;
use Models\Item;

class SpellController
{
    public function addItem($item){

        $bagPack = new BagPack();
        $bagPack ->addItem($item);
        if($bagPack->getTotalItems()>8){
            //reorganizar en bolsas

        }

    }
}