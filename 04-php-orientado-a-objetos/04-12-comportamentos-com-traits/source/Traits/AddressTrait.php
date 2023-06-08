<?php
namespace Source\Traits;
trait AddressTrait{
    private Adress $address;
    
    public function getAdress(): Adress{
        return $this->address;
    }

    public function setAdress(Adress $address):void{
        $this->address = $address;
    }
}