<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);


$arrayProfile = [
    "name" => "Robson",
    "company" => "Upinside",
    "mail" =>  "cursos@upinside.com.br"
  ];


  $objProfile = (object) $arrayProfile;
  //acessando um array

  echo "{$arrayProfile['name']} trabalha na {$arrayProfile['company']}<br>";
  echo "{$objProfile->name} trabalha na {$objProfile->company}<br>";
  $ceo = $objProfile;
   //eliminando do meu objeto
   //boa parte das funções para array também servem para objetos
  unset($ceo->company);
  var_dump($ceo);

  $company = new stdClass();
  $company->company = "upInside";
  $company->ceo = $ceo;
  $company->manager = new stdClass();
  $company->manager->name = "kauê";
  $company->manager->mail = "upInside@gmail.com";

  var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();
$exception = new PDOException();
var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent" => get_parent_class($exception),//se possui uma herança
    "subclass" => is_subclass_of($exception, "Exception")//se ela extende de alguma classe
]);