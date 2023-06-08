<?php
/**
 * APESAR DE ESTAR APARECENDO UM ERRO, A APLICAÇÃO ESTÁ FUNCIONANDO NORMALMENTE. 
 * DE FATO NÃO HÁ ERRO. 
 */

use Source\Traits\Cart;

use function PHPSTORM_META\map;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um comportamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new Source\Traits\User("josé", "carlos", "josecampos.jdk@gmail.com"); 
$address = new Source\Traits\Adress("m. gonçalves", "21", "depois do colégio capitão");

$register = new Source\Traits\Register($user, $address);

// var_dump(
//     $register,
//     $register->getUser(),
//     $register->getAdress(),
//     $register->getUser()->getFirstName(),
//     $register->getAdress()->getStreet()
// );

$compra = new \Source\Traits\Cart();
$compra->add(1, "fsphp", 1, "2000");

$compra->add(2, "laraval developer", 2, 1000);

var_dump($compra, $compra->checkout($user, $address));

$compra->remove(2, 1);

var_dump($compra);