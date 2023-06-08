<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

$numero = 10;
echo "<p> teste </p>"," ", $numero, "<br>";
echo "<p>Olá Mundo", " ","<span class='tag'>#Bora Programar </span>","</p>";
$hello = "olá, mundo";
$code = "<span class='tag'>#Bora Programar </span>";

echo "{$hello} {$code}";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
?>

<p><?=$code;?></p>

<?php

echo 'usando o comando *print*' . "<br>";
print $code ."<br>";
print $hello ."<br>";
echo "------------------------------- <br>";

print "$hello" ."$code <br>"; //não pode usar vírgula
//print_r();exibe vetores

$vetor = [
    "nome" => "josé carlos",
    "linguagem" => "php",
    "idade" => 20
];
print_r($vetor);//mostra valores de vetores

echo "<pre>", print_r($vetor, true), "</pre>";/*colocando o valor true, evita que o número 1(true) apareça
 na tela*/


$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitile = "Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock, 
a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
consectetur,";

printf($article, $title, $subtitile);//exibi variáveis formatadas

$pessoa = "<article><h1>Nome: %s</h1><p>Linguagem: %s Idade %s</p></article>";
vprintf($pessoa, $vetor);//usa os valores do array como parâmetros

echo vsprintf($pessoa, $vetor);//mesma coisa do anterior, mas armazena numa variável

var_dump($vetor);//faz um debugg completo de variáveis
var_dump(
    $vetor,
    $hello,
    $code
);