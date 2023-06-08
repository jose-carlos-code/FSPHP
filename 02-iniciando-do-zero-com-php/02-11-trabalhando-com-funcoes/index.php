<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
    require __DIR__ ."/functions.php";
    var_dump(functionName("josé carlos", 21, 1.72));    

    var_dump(optionsArgs("josé carlos"));



/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$peso = 86;
$altura = 1.83;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
$pagamento1 = pay(350);
$pagamento2 = pay(150);
$pagamento3 = pay(800);

echo $pagamento1;
echo $pagamento2;
echo $pagamento3;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("josé", "giácomo", "matheus"));