<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();

// $company->setTeam("desenvolvimento");    
// var_dump($company->getTeam());

$adress = new \Source\Related\Adress("mario gonçalves de medeiros", 21, "bairro");
$company->boot("upinside", $adress);
var_dump($company);

echo "<p> a {$company->getCompany()} tem sede na rua {$company->getAdress()->getStreet()} </p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new \Source\Related\Product("fsphp", "1997");
$laradev = new \Source\Related\Product("Laravel Developer", "997");

$company->addProduct($fsphp);
$company->addProduct($laradev);

var_dump($company);

/**
 * @var \Source\Related\Product $product
 */
foreach($company->getProduct() as $product){
    echo "<p> {$product->getName()} por {$product->getPrice()}</p>";

}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Robson", "leite");
$company->addTeamMember("manager", "kaue", "cardoso");

var_dump($company);