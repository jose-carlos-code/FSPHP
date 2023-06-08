<?php

namespace Source\Inheritance\Event;

use Source\Inheritance\Adress;

class EventLive extends Event{

    /**
     * @var Adress
     */
    private $adress;

    public function __construct($event, \DateTime $date, $price, $vacancies, Adress $adress){//construtor da classe com atributos da classe mae
        parent::__construct($event, $date, $price, $vacancies);//executando o construtor da classe mae
        $this->adress = $adress;
    }

    public function getAdress():Adress{
        return $this->adress;
    }


}