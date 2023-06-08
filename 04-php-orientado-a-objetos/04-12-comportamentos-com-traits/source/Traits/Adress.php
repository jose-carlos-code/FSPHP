<?php
namespace Source\Traits;
class Adress{
    private $street;
    private $number;
    private $complement;

    public function __construct($street, $number, $complement=null){
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }

    public function getStreet(){
        return $this->street;
    }

    public function setStreet($street){
        $this->street = $street;
    }

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function getComplement(){
        return $this->complement;
    }

    public function setComplement($complement){
        $this->complement= $complement;
    }

}