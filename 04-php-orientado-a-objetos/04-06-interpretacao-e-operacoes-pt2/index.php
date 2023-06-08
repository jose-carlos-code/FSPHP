<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.06 - Interpretação e operações pt2");

require __DIR__ . "/source/autoload.php";

/*
 * [ set ] Executado altomaticamente quando se tenta criar uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.set
 *
 * inacessível = propridade é privada ou não existe
 */
fullStackPHPClassSession("__set", __LINE__);
$fsphp = new \Source\Interpretation\Product();
$fsphp->handler("fullstack php developer", 1997);

$fsphp->name = "putaria";
$fsphp->title = "curso";
$fsphp->value = 1997;
$fsphp->price = 337;
var_dump($fsphp);


$fsphp->title = "Full Stack developer";
$fsphp->company = "UpInside";

/*
 * [ get ] Executado automaticamente quando se tenta obter uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.get
 *
 */
fullStackPHPClassSession("__get", __LINE__);
//vai ser executado automaticamente quando tentarmos obter a propriedadae inacessível

echo "<p> o curso{$fsphp->title} da {$fsphp->company} é o melhor curdo de PHP do mercado!</p>";


/*
 * [ isset ] Executada automaticamente quando um teste ISSET ou EMPTY é executado em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.isset
 */
fullStackPHPClassSession("__isset", __LINE__);
//executa automaticamente quando eu uso um isset

isset($fsphp->phone);
isset($fsphp->name);
empty($fsphp->adress);

var_dump($fsphp);

/*
 * [ call ] Executada automaticamente quando se tenta usar um método inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.call
 *
 */
fullStackPHPClassSession("__call", __LINE__);
//é executado automaticamente quando tentamos executar um método que está inacessível
$fsphp->notFound("opss", "teste");
$fsphp->setPrice(1997, 10);

/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__toString", __LINE__);
//quando vc tenta dar um echo no objeto da classe
echo $fsphp;
/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__unset", __LINE__);
//quando eu tento remover uma propriedade que não existe
unset(
    $fsphp->name,
    $fsphp->price,
    $fsphp->data
);

var_dump($fsphp);