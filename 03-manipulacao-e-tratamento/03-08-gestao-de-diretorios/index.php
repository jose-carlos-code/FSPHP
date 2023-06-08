<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__ . "/uploads";

if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);//cria a pasta
}else{
    var_dump(scandir($folder));//exibe a pasta em fora de array
}


/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

$file = __DIR__ . "/file.txt";
var_dump(
    pathinfo($file),//detalhes do caminho do arquivo
    scandir($folder),//exibe o diretorio em forma de array
    scandir(__DIR__)//exibe as pastas dentro do diretorio raiz
);

if(!file_exists($file) || !is_file($file)){
    fopen($file, "w");
}else{
    /*arquivo a se copiar, 
    pasta para onde se quer enviar o arquivo "/" pq o nome do diretorio nao termina com a barra,
    basename -> pega o nome do arquivo 
    */
    //copy($file, $folder . "/" . basename($file));

    /*por padrão o PHP substitui o arquivo, mas abaixo vamos fazer uma forma de 
    ir sempre copiando e renomeando o arquivo*/
    //RENOMEANDO O ARQUIVO
    //rename(__DIR__ ."/uploads/file.txt", __DIR__ ."/uploads/" . time() . "." . pathinfo($file)["extension"]);

    //MOVENDO O ARQUIVO COM O RENAME
    //rename($file,  __DIR__ ."/uploads/" . time() . "." . pathinfo($file)["extension"]);
}


/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

$dirRemove = __DIR__ . "/remove";
$dirFiles = array_diff(scandir($dirRemove), ['.', '..']);//isolar os pontos para nao apagalos ja que eles não são arquivos
$dirCount = count($dirFiles);
var_dump($dirFiles, $dirCount);

//SE A PASTA ESTIVER VAZIA, APAGUE ELA
if($dirCount > 1){
    echo "<h2>CLEAR...</h2>";
    foreach(scandir($dirRemove) as $fileItem){
        $fileItem = __DIR__ . "/remove/{$fileItem}";
        if(file_exists($fileItem) && is_file($fileItem)){
            unlink($fileItem);//remove o item da pasta
        }
    }
}else{
    rmdir($dirRemove);
}

