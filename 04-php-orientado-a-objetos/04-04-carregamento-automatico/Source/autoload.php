<?php

spl_autoload_register(function($class){
    $prefix = "Source\\";//namespace da classe
    $baseDir = __DIR__ . "/";
    $len = strlen($prefix);//quantos caracteres
    
    //comparação binária
    if(strncmp($prefix, $class, $len) !== 0){/*se os primeiros caracteres de $prefix forem diferentes
        dos da variável $class, retorne 1 | !== valor e tipo diferente de alguma coisa */
        return;
    }

    $relativeClass = substr($class, $len);//pegue uma string a partir de tal posição
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
    var_dump(["relativeClass" => $relativeClass]);

    if(file_exists($file)){
        require $file;
    }

    //var_dump($class, $prefix, $basedir);
});