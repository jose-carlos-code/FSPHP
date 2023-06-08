<?php

namespace Source\Inheritance\Event;

class Event{
    private $event;
    private $date;
    private $price;

    private $registers;
    protected $vacancies;//protected -  a classe pode utilizar e as filhas dela também

    public function __construct($event, \DateTime $date, $price, $vacancies){// \DateTime indo pro diretorio raiz e pegando a classe DateTime do php
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email){
        if($this->vacancies >=1){
            $this->vacancies-=1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        }else{
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        }
    }

    protected function setRegister($fullName, $email){
        $this->registers = [
            "name" => $fullName,
            "email" => $email
        ]; 
    }

    public function getEvent(){
        return $this->event;
    }

    public function getDate(){
        return $this->date->format('d/m/Y H:i');
    }

    public function getPrice(){
        return number_format($this->price, "2", ",", ".");
    }


}