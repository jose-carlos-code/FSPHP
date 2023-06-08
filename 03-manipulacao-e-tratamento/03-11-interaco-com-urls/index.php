<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1> <a href='index.php'> Clear</a> </h1>";
echo "<p><a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";

$data = [
    "Nome" => "jose carlos",
    "idade" => 19
];
$arguments = http_build_query($data);//transforma os dados em dados para a URL
echo "<p> <a href='index.php?{$arguments}'>Args by Array</a> </p>";
$object = (object)$data;
var_dump(
    $object,
    http_build_query($object)
); 

var_dump($_GET);
/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter = http_build_query([
    "Nome" => "jose carlos",
    "company" => "UpInside",
    "mail" => "josecampos2030.jdk@gmail.com",
    "script" => "<script> alert('Esse é um Javascript') </script>"
]);

echo "<p> <a href='index.php?{$dataFilter}'>$dataFilter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);//filtra o array para não receber códigos javascript
if($dataUrl){
    if(in_array("", $dataUrl)){
        echo "<p class='trigger warning'> Faltam Dados</p>";
    }
    elseif(empty($dataUrl['mail'])){
        echo "<p class='trigger warning'>Falta o email!</p>";
    }
    elseif(!filter_var($dataUrl['mail'], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'>Email inválido!</p>";
    }
    else{
        echo "<p class='trigger  accept'>Tudo certo!</p>";
    }
}else{
    var_dump(false);
}

var_dump($dataUrl);

$dataFilter = http_build_query([
    "Nome" => "jose carlos",
    "company" => "UpInside",
    "mail" => "cursos",
    "site" => "Upinside",
    "script" => "<script> alert('Esse é um Javascript') </script>"
]);

parse_str($dataFilter, $arrDataFilter);//converte o string para array.
var_dump($arrDataFilter);

$dataPreFilter =[
    "Nome" => FILTER_SANITIZE_STRING,
    "company" => FILTER_SANITIZE_STRING,
    "mail" => FILTER_VALIDATE_EMAIL,
    "site" => FILTER_VALIDATE_URL,
    "script" => FILTER_SANITIZE_STRING
];

var_dump(filter_var_array($arrDataFilter, $dataPreFilter));//filtra o primeiro array acordo com as validações do segundo array