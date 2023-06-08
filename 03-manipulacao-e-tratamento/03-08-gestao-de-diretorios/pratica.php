<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$diretorio = __DIR__ . "/minhaPasta";
if(!file_exists($diretorio) || !is_dir($diretorio)){
    mkdir($diretorio, 0755);
}else{
    var_dump(scandir($diretorio));
}

$teste = __DIR__ . "/teste.txt";
var_dump(
    pathinfo($teste),
    scandir($diretorio),
    scandir(__DIR__)
);

if(!file_exists($teste) || !is_file($teste)){
    fopen($teste, "w");
}else{
    //rename(__DIR__ . "/minhaPasta/teste2.txt", __DIR__ . "/minhapasta/   " . time() . "." . pathinfo($teste)["extension"]);
}

$remove = __DIR__ . "/remove";
if(!file_exists($remove) || !is_dir($remove)){
    mkdir($remove, 0755);
}
$directory = array_diff(scandir($remove), [".", ".."]);

$dirCount = count($directory);

var_dump(
    scandir($remove),
    $dirCount 
);

fullStackPHPClassSession("copiar e renomear", __LINE__);


 
fullStackPHPClassSession("remover e deletar", __LINE__);


