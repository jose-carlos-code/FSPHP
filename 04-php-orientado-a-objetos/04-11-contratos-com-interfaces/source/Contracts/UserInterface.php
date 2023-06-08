<?php

namespace Source\Contracts;

interface UserInterface{
    public function __construct($firsName, $lastName, $email);

    //public function setEmail($email);
    public function getFirstName();
    public function getLastName();
    public function getEmail();
}