<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use \Source\Member\Config;

$config = new Config();
var_dump($config);
//Não funciona -> echo "<p>{$config::COMPANY}<p>";
echo "<p>". $config::COMPANY. "<p>";//tem concatenar

var_dump(
    Config::COMPANY,
    //Config::DOMAIN,
    //Config::SECTOR
);

//debugar classes

$reflection = new ReflectionClass(config::class);
var_dump([
    "objeto config" => $config, "reflection->getConstants()" => $reflection->getConstants()]);

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "upinside";
Config::$domain = "upinside.com.br";
Config::$sector = "educação";

/*Mesmo alterando pelo obketo, muda apenas na classe */
$config::$sector = "tecnologia";


var_dump($config, $reflection->getProperties(), $reflection->getDefaultProperties());

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::SetConfig("", "", "");
Config::SetConfig("UpIsinde", "UpInside.com.br", "Educação");
var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());
/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

use Source\Member\Trigger;

$trigger = new Trigger();

$trigger::show("um objeto trigger");

var_dump($trigger);//objeto está vazion porque eu estou mexendo apenas na classe

Trigger::show("esta é uma mensagem para o usuário", Trigger::ACCEPT);
Trigger::show("esta é uma mensagem para o usuário", Trigger::WARNING);
Trigger::show("esta é uma mensagem para o usuário", Trigger::ERROR);

echo Trigger::push("esta é uma mensagem para o usuário");
echo Trigger::push("esta é uma mensagem para o usuário", Trigger::ACCEPT);
echo Trigger::push("esta é uma mensagem para o usuário", Trigger::WARNING);
echo Trigger::push("esta é uma mensagem para o usuário", Trigger::ERROR);
echo Trigger::push("esta é uma mensagem para o usuário", "blue");