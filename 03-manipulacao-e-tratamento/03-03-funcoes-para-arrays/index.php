<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$index = ["AC/DC", "Nirvana", "Alter Bridge"];

$assoc = 
    [
       "Band1" => "AC/DC", 
       "Band2" => "Nirvana", 
       "Band3" => "Alter Bridge"
    ];

//ADICIONANDO UM VALOR NO COMEÇO DO ARRAY

array_unshift($index, "Pearl Jam");
var_dump($index);

//ADICIONADO UM VALOR NO FINAL DO ARRAY

array_push($index, "");
var_dump($index);

//ADICIONANDO VALORES NO COMEÇO DO ARRAY ASSOCIATIVO
$assoc = ["Band4" => "Pearl Jam", "Band5" => ""] + $assoc;//concatenando, a gente não sobreescreve o array
var_dump($assoc);

//ADICIONANDO VALORES NO FINAL DO ARRAY ASSOCIATIVO
$assoc = $assoc + ["Band" => "Skillet"];
var_dump($assoc);


//REMOVENDO O PRIMEIRO INDICE
array_shift($index);
array_shift($assoc);
var_dump($index, $assoc);

//REMOVENDO O ÚLTIMO ÍNDICE
echo "removendo o ultimo indice <br>";
array_pop($index);
array_pop($assoc);

array_unshift($index, "");

var_dump($index, $assoc);

echo "elimindano indices que não tem valor<br>";
$index = array_filter($index);
var_dump($index);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

array_unshift($index, "Pearl Jam");

$index = array_reverse($index);
$assoc = array_reverse($assoc);

//ordena pelo valor
asort($index);
asort($assoc);

//ordena pelo indice
ksort($index);
//inverte a ordem dos indices
krsort($index);

//ordenar pelo valor e reindexar o array
sort($index);
//inverte a ordem, reindexando
rsort($index);


var_dump($index, $assoc);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    array_keys($assoc),
    array_values($index)
);

//VERIFICA SE EXISTE TAL INDICE OU VALOR EM TAL ARRAY   
if(in_array("AC/DC", $assoc)){
    echo "<p>Cause I`m back! </p>";
}

//transforma o array em uma string
$ArrToString = implode(", ", $assoc);
echo "<p>Eu curto {$ArrToString} e muitas outras </p>";
echo "<p>{$ArrToString} </p>";


//transforma uma string em um array
var_dump(explode(", ", $ArrToString));
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "josé carlos",
    "company" => "upinside",
    "mail" => "jose.campos@grupounibra.com"
];


// $template = <<<TPL 
//     <article>  </article>

// TPL;


// echo str_replace(array_keys($profile), array_values($profile), $template);

// $replaces = "{{" . implode("}}&{{", array_keys($profile)). "}}";

// echo str_replace(explode("&", $replaces), array_values($profile0), $replaces);