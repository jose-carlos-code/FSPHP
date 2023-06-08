<?php

namespace Source\Related;

class Product{
    Private $name;
    Private $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return number_format($this->price, "2", ".", ",");
    }

    public function setPrice($price){
        $this->price = $price;
    }

}