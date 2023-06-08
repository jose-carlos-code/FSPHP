<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/file.txt";
if(file_exists($file) && is_file($file)){
    echo "EXISTE!";
}else{
    echo "Não existe :(";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);


if(!file_exists($file) || !is_file($file)){
    $fileOpen = fopen($file, "w");//cria o arquivo. "w" -> esse arquivo aceita leitura e gravação
    fwrite($fileOpen, "Linha 1" . PHP_EOL);//escreve no arquivo e quebra a linha
    fwrite($fileOpen, "Linha 2" . PHP_EOL);//escreve no arquivo e quebra a linha
    fwrite($fileOpen, "Linha 3" . PHP_EOL);//escreve no arquivo e quebra a linha
    fwrite($fileOpen, "Linha 4" . PHP_EOL);//escreve no arquivo e quebra a linha
    fclose($fileOpen);
}else{
    var_dump(
        file($file),//mostra o arquivo
        pathinfo($file)//mostra detalhes do arquivo
    );
}

echo file($file)[3];//o arquivo na posição 3

$open = fopen($file, "r");//abrir o arquivo apenas para leitura
while(!feof($open)){//file en of file -> enquanto não chegar na ultima linha do arquivo
    echo "<p>". fgets($open) ."</p>";//pegue a linha
}

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste2.txt  ";
if(file_exists($getContents) && is_file($getContents)){
    echo file_get_contents($getContents);//pega os dados do arquivo
}else{
    $data = "<article><h1> Robson</h1> <p>CEO UpInside</p><br>cursos@upinside.com.br </article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}