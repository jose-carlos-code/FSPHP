<?php
//session_start();//tem que ser inicializada na abertura do arquivo
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);
setcookie("fsphp", "Esse é o meu cookie", time() + 60);//cria um cookie
//setcookie("fsphp", null, time() + 60);//se eu quise apagar o cookie de uma vez

$cookie = filter_input_array(INPUT_COOKIE,FILTER_SANITIZE_STRIPPED);
var_dump(
    $cookie
);

$time = time() + 60 * 60 * 24 * 7;
$user = [
    "user" => "root",
    "passwd" => "12345",
    "expire" => $time   
];

setcookie(
    "fslogin",//nome do cookie
    http_build_query($user),//conteudo do cookie
    $time,//quanto tempo ele ficará ativo
    "/",//será válido para toda a aplicação, ou o domínio todo
    "www.localhost",//qual o dominío?
    TRUE//só pode ser acessado por https
);

$login = filter_input(INPUT_COOKIE, "fslogin", FILTER_SANITIZE_STRIPPED);
    var_dump($login);
     parse_str($login, $user);
     var_dump($user);



/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

$ses = __DIR__ . "/ses";

if(!file_exists($ses) || !is_dir($ses)){
    mkdir($ses, 0755);
    var_dump(scandir($ses));
}

session_save_path(__DIR__ . "/ses");
session_name("oioioi");
session_start(["cookie_lifetime" => (60 * 60  * 24)]);



var_dump($_SESSION, 
[
    "id" => session_id(),
    "name" => session_name(),
    "status" => session_status(),
    "cookie_params" => session_get_cookie_params()
]);

$_SESSION['login'] = (object) $user;
$_SESSION['user'] = $user;
session_destroy();//destroi todas as sessões
//unset($_SESSION['user']);//apaga a sessão
//var_dump($_SESSION['user']);

var_dump($_SESSION);