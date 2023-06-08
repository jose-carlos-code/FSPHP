<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

// include "file.php";/*para arquivos que eu preciso mas não são excenciais para a aplicação */
//include "header.php";
include __DIR__."/header.php";//trás o caminho absoluto

$profile = new stdClass();
$profile->nome = "josé carlos";
$profile->company = "UNIBRA";
$profile->email = "jose.campos@grupounibra.com";
var_dump($profile);

include __DIR__."/profile.php";

$profile = new stdClass();
$profile->nome = "bruce wayne";
$profile->company = "wayne enterprises";
$profile->email = "brucewaynemorcegueta@gmail.com";

//include_once __DIR__ ."/profile.php"; quando precisa incluir só uma vez
 
/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
/*para arquivos que são excencias para a aplicação */

require __DIR__. "/config.php";
require_once __DIR__. "/config.php";

require __DIR__. "/Helper.php";


echo "<h1>" .COURSE ."</h1>";//as vezes pode dar conflito se der required ou include mais de uma vez
var_dump(require_once __DIR__. "/config.php");

var_dump($Requisicao(4));