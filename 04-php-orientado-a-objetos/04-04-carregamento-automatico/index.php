<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");

/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

require __DIR__ . "/Source/Loading/User.php";
require __DIR__ . "/Source/Loading/Adress.php";
//require __DIR__ . "/Source/Loading/Company.php";

require __DIR__ . "/Source/autoload.php";

$user = new \Source\Loading\User();
$adress = new \Source\Loading\Adress();
$company = new \Source\Loading\Company();

var_dump($user, $adress, $company);


/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);
