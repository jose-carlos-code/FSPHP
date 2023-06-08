<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
$userFirstName = "josé";
$userLastName = "carlos";

$user_first_name = $userFirstName;
$user_last_name = $userLastName;
echo("$userFirstName $userLastName <br>");
echo("$user_first_name $user_last_name <br>");

$company = "upInside <br>";
$$company = "php <br>";//variável variável
echo $company;
echo $$company;
/* o valor de $comapany passa a ser a chave upInside. e o valor de upInside é  "php" */

$calcA = 10;
$calcB = 20;
$calcB = &$calcA;//criou uma referência na variável calcA
$calcA = 50;

var_dump([ "a" => $calcA, "b" => $calcB]);
/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;

var_dump($true, $false);

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1> um call user function </h1> </article";
$codeClear = call_user_func("strip_tags", $code);//remove todas as tags
var_dump($code, $codeClear);


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);