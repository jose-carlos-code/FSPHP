<?php 

namespace Source\Inheritance\Event;

class EventOnline extends Event{

    private $link;

    public function __construct($event, \DateTime $date, $price, $link, $vacancies=null){//construtor da classe com atributos da classe mae
        parent::__construct($event, $date, $price, $vacancies);//executando o construtor da classe mae
        $this->link = $link;
    }

    public function register ($fullName,$email){
        /*parent::register($fullName, $email);se eu mantivesse essa linha, esse método teria a 
        mesma execuçãp da classe pai*/
        $this->vacancies +=1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Show {$fullName}, cadastrado com sucesso! </p>";
    } 


}