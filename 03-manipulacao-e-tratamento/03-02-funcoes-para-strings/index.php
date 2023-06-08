<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);
$string = "o último show do AC/DC foi incrível!";
var_dump(
    [
        'string' => $string,
        'strlen' => strlen($string),
        'mb_strlen' => mb_strlen($string),//não conta os espaços
        'substr' => substr($string, "14"),//corta a string,contando os espaços   
        'mb_substr' => mb_substr($string, "14"),//corta a string, sem contar os espaços
        'strtoupper' => strtoupper($string), 
        'mb_strtoupper' => mb_strtoupper($string), 
    ]   

);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbstring = $string;
var_dump([  
"stringtoupper" => mb_strtoupper($mbstring),
"stringtoulower" => mb_strtolower($mbstring),   /*CONSTANTES DEFINIDAS PARA*/
"mb_convert_case_upper" => mb_convert_case($mbstring, MB_CASE_UPPER),
"mb_convert_case_lower" => mb_convert_case($mbstring, MB_CASE_LOWER),
"mb_convert_case_tilte" => mb_convert_case($mbstring, MB_CASE_TITLE),// a primeira letra de cada palavra

]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbreplace = $mbstring."fui, e quero ir de novo, e foi incrível";
var_dump([
    'mb_strlen' => mb_strlen($mbreplace),
    'mb_strpos' => mb_strpos($mbreplace, ", "),//em qual posição aparece esse caractere
    'mb_strrpos' => mb_strrpos($mbreplace, ","),//a ultima posição em que aparece esse caractere
    'mb_substr' => mb_substr($mbreplace, 40+3, 14),//qual é a string, onde vou cortar, o tamanho do corte
    'mb_strstr 1' => mb_strstr($mbreplace, ", "),//pegue a pratir da vírgula
    'mb_strstr 2' => mb_strstr($mbreplace, ", ", true),//inverte a ordem
    'mb_strrch' => mb_strrchr($mbreplace, ", ")//encontra a última ocorrencia dessa letra
]);
    

$mbreplace = $string;
echo "<p>$string</p>";

echo "<p>", str_replace("AC/DC", "Nirvana", $mbreplace), "</p>";
echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbreplace), "</p>";
echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICO"], $mbreplace), "</p>";//respeitando a ordem do primeiro array

$article = <<<ROCK
    <article> 
        <h3>event</h3>
        <p>desc<p>
    </article>
ROCK;

$articledata = [
    "event" => "Rock In Rio ",
    "desc" => $mbreplace
];

echo str_replace(array_keys($articledata), array_values($articledata), $article);

$endPoint = "name=Jose&email=josecampos2030.jdk@gmail.com";
mb_parse_str($endPoint, $parseEndPoint);
var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
]);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);