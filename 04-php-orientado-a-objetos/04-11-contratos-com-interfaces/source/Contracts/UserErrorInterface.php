<?php

namespace Source\Contracts;

Interface UserErrorInterface{

    
    public function setError($error);

    public function getError();
}