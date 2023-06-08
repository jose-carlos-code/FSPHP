<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);
$event = new \Source\Inheritance\Event\Event(
    "Workshop fsphp",
    new DateTime('2019-05-20 16:00'),
    2500,   
    "4"
);

var_dump($event);

$event->register("josé carlos", "josemcapos2030.jdk@gmail.com");
$event->register("Robson", "robson@gmail.com");
$event->register("angelica", "angelica@gmail.com");
$event->register("angelica", "angelica@gmail.com");
$event->register("angelica", "angelica@gmail.com");



/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);
$adress = new \Source\Inheritance\Adress("rua m. gonçalves", 21);
$event = new \Source\Inheritance\Event\EventLive(
    "Workshop fsphp",
    new DateTime('2019-05-20 16:00'),
    2500,   
    "4",
    $adress
);

var_dump($event);

$event->register("josé carlos", "josemcapos2030.jdk@gmail.com");
$event->register("Robson", "robson@gmail.com");
$event->register("angelica", "angelica@gmail.com");
$event->register("mauricio", "angelica@gmail.com");
$event->register("pedro", "angelica@gmail.com");


/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new \Source\Inheritance\Event\EventOnline(
    "Workshop fsphp",
    new DateTime('2019-05-20 16:00'),
    2500,   
    "http://upinside.com.br",
);

var_dump($event);

$event->register("josé carlos", "josemcapos2030.jdk@gmail.com");
$event->register("Robson", "robson@gmail.com");
$event->register("angelica", "angelica@gmail.com");
$event->register("mauricio", "angelica@gmail.com");
$event->register("pedro", "angelica@gmail.com");
