<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
$array = array(1, 2 ,3);
$array = [4,5,6];//sobreescrevendo o array
$array[1] = 10;//substitui o 5
$array[] = 12;//adiciona no final do array
var_dump($array);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcom"
];
$arrayIndex[] = "cliff";
$arrayIndex[] = "phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

