<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */

 
fullStackPHPClassSession("while, do while", __LINE__);
/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */

 $looping = 1;
 $while = [];

 while ($looping <= 5){
    $while[] = $looping;
    $looping++;
 }

 var_dump($while);

 $looping = 5;
 $while = [];
 do{
    $while[] = $looping;
    $looping--;

 }while($looping >= 1);

 var_dump($while);

fullStackPHPClassSession("for", __LINE__);


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);


/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);