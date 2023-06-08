<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);
var_dump([
    date_default_timezone_get(),//pega o timezone do servidor
    date(DATE_W3C),//exibe a data em um determinado formato
    date("d/m/Y H:i:S")//formata para o padrão brasileior
]);

define("DATE_BR", "d/m/Y H:i:s");//define uma constante para a data de data
define("DATE_TIMEZONE", "Pacific/Apia");//DEFINE UM TIMEZONE

date_default_timezone_set(DATE_TIMEZONE);//muda o formata padrão data do servidor

var_dump([
    date_default_timezone_get(),
    date(DATE_BR)//pega a data e o formato da tada atual
]);

var_dump([getdate()]);

echo "<p>hoje é dia ", getdate()["mday"], " </p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([

"strtorime NOW" => strtotime("now"),//time atual(valor inteiro)
"time" => time(),//mesmo resultado do anterior, só que com menos código
"strtotime +10days" => strtotime("+10days"),//adiciona mais 10 dias ao time atual
"date DATE_BR" => date(DATE_BR),
"date +10 days" => date(DATE_BR, strtotime("+10days")),
"date -10 days" => date(DATE_BR, strtotime("-10days")),
"date +10 year" => date(DATE_BR, strtotime("+10year"))//pode ser year ou years
]);

//strftime

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p> a data de hoje é ",strftime($format) ,"</p>";
//outra forma de se utilizar
echo strftime("<p>Hoje é dia %d do %m de %Y às %H horas e %M minutos. </p>");