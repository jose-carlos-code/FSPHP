<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year){
    $age = Date('Y') - $year;
    return "<p> você tem {$age} anos de idade </p>";
};

echo $myAge(2002);

$priceBrl = function($price){
    return number_format($price, 2, ",", ".");
};

echo "<h5>o projeto custa {$priceBrl(3600)}. Vamos fechar? </h5>";

$myCart = [];
$myCart['totalPrice'] = 0;
$cardAdd = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart['totalPrice'] = $myCart[$item];
};

$cardAdd("HTML5", 3, 468);
$cardAdd("Jquery", 2, 468);
var_dump($cardAdd);
/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
echo "<h1>GENERATORS</h1>";

echo "<h3>Não se utilza da forma abaixo </h3>";

$itaretor = 10;

function showDates($days){
    $saveDate = [];
    for($day = 1; $day < $days; $day++){
        $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align:center;'>";
    foreach(showDates($itaretor) as $date){
        echo "<small class='tag'> {$date} </small>". PHP_EOL;
    }
echo "</div>";

echo "<h3>Agora sim se utilza da forma abaixo </h3>";

function generatorDates($days){
    for($day = 1; $day < $days; $day++){
        yield(date("d/m/a", strtotime("+{day}days")));/**aqui ele processa porque o php não tá armazenando em 
        um array*/
    }
}

echo "<div style='text-align:center;'>";
    foreach(generatorDates($itaretor) as $date){
        echo "<small class='tag'> {$date} </small>". PHP_EOL;
    }
echo "</div>";