<?php 

namespace source\interpretation;

class User{
    private $firstName;
    private $lastName;
    private $email;    

    //aprendendo a fazer o método construtor
    //colocar o que é importante no início
    public function __construct($fisrtName, $lastName, $email){/*$email=true ->> não é obrigatório */
        $this->firstName = $fisrtName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /*sempre que eu chamar o método clone, ele vai reiniciar os atributos */
    public function __clone(){
        $this->firstName = null;
        $this->lastName = null;
        $this->email = null;
    }

    public function __destruct(){
        var_dump($this);
       echo "<p class='trigger accept'>O objeto {$this->firstName} foi destruído! </p>";
    }

    public function getFirstName(){ 
        return $this->firstName;
    }

    public function setFirstName($fisrtName){
        $this->firstName = $fisrtName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

}