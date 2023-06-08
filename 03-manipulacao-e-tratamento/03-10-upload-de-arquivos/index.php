<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");


$folder = __DIR__ . "/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
}

var_dump([
    "filesize" => ini_get("upload_max_filesize"),//tamanho maximo de um arquivo individual
    "postsize" => ini_get("post_max_size")//tamanho maximo total dos arquivos upados

]);


var_dump([
    filetype(__DIR__ . "/index.php"),//se é um arquivo
    mime_content_type(__DIR__ . "/index.php")//qual arquivo eu posso deixar entra no meu servidor
    //nunca deixar entrar arquivos PHP, JSON e tals
]);

$getpost = filter_input(INPUT_GET," post", FILTER_VALIDATE_BOOLEAN);
var_dump($_FILES);

if($_FILES && !empty($_FILES["file"]["name"])){

    $filesUpload = $_FILES["file"];
    var_dump(["filesUpload" => $filesUpload]);
    $allowebTypes = [
        "image/jpg",
        "image/jpeg",
        "image/png",
        "application/pdf",
        "text/plain"
    ];

    $newFileName = time() . mb_strstr($filesUpload["type"], ".");
    if(in_array($filesUpload['type'], $allowebTypes)){
        if(move_uploaded_file($filesUpload['tmp_name'], __DIR__ . "/uploads/{$newFileName}")){  
            echo "<p class='trigger accept'>Arquivo enviado com sucesso!</p>";
        }else{
            echo "<p class='trigger warning'>Erro inesperado!</p>";
        }

    }else{
        echo "<p class='trigger warning'>Tipo de arquivo não permitido</p>";
    }
}elseif($getpost){
    echo "<p class='trigger warning'>Whoops, parece que o arquivo é muito grande! </p>";//essa mensagem não está aparecendo
}else{
    if($_FILES){
        echo "<p class='trigger warning'>Selecione um arquivo para poder enviar! </p>";
    }
}


include __DIR__ . "/form.php";
var_dump(scandir(__DIR__ . "/uploads"));
/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);