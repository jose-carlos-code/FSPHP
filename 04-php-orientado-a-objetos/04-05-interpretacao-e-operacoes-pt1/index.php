<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";
/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

$user = new \Source\interpretation\User("josé carlos", "campos", "meuemail@gmail.com");
var_dump($user); 
/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$kaue = $user;
$robson = clone $kaue;
$robson->setFirstName("robson");
$robson->setLastName("leite");
var_dump($kaue);
$gustavo = clone $kaue;//já vem com os valores que foram setados
var_dump($gustavo, $kaue);
/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);
// é executado automaticamente quando o ciclo de vida do objeto é encerrado
//acontece no fim da apliação ou manualmente
$gustavo = null;//destruindo um objeto manualmente
