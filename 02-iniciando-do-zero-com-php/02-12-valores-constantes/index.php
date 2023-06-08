<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "FullStack PHP");//declarado durante a execução do códgio
const AUTHOR = "Robson";//declarado antes da execução do código

$formation = true;
if($formation){
    //const TESTE = "teste"; não consigo fazer isso porque a variável é declarada antes da execução
    define("COURSE_TYPE", "formação");
}else{
    define("COURSE_TYPE", "curso");
}

echo "<p>", COURSE_TYPE, " ", COURSE, " ", AUTHOR, "</p>";

class Config{
    const USER = "root";
    const HOST = "localhost";
}

echo "<p>", Config::USER, "</p>";


//var_dump(get_defined_constants(true));//mostra todas as constantes do php
var_dump(get_defined_constants(true)["user"]);//mostra todas as constantes do aplicação atual

//
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump(
    [__LINE__,__FILE__,__DIR__]
);


function fullstackphp(){
    return __FUNCTION__;

}

trait myTrait{//comportamento que a gente define pra utilizar dentro da orientação a objetos
    public $name = __TRAIT__;
}


class FsPHP{
    use MyTrait;
    public $classname = __CLASS__;  
}

var_dump(fullstackphp());

var_dump(new FsPHP());

require __DIR__ .'/MyClass.php';

var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);