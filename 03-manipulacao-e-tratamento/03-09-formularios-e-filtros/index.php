<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);
$form = new Stdclass();
$form->name = "josé carlos";
$form->mail = "gmail@gmail.com";

var_dump($_REQUEST);//pega os dados do formulario
$form->method = "post";

include __DIR__ ."/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);//pega os dados que foram enviados via POST    


$post = filter_input(INPUT_POST, "name", FILTER_DEFAULT);//pega o valor digitado no campo name do formulario tipo POST
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);//pega todos os valore digitads do formulario tipo POST

var_dump([

    $post,
    $postArray
]);

if($postArray){
    if(in_array("", $postArray)){//se o array tiver algum campo vazio
        echo " <p class='trigger warning'>Preecha todos os campos!</p>";
    }elseif(!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)){//se o campo de email não for válido
        echo " <p class='trigger warning'>O email informado não é valido!</p>";
    }else{
        //itera sobre o arrat
        $saveStrip = array_map("strip_tags", $postArray);//pra cada elemento ele retira códigos(se houver) dos inputs
        $save = array_map("trim", $saveStrip);
        var_dump($save);
        echo "<p class='trigger accept'>Cadastro realizado com sucesso </p>";
    }
}

$form->method = "post";
include __DIR__ ."/form.php";   

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

var_dump($_GET);
$get = filter_input(INPUT_GET,"mail", FILTER_DEFAULT);
//$get = filter_input(INPUT_GET,"mail", FILTER_DEFAULT);//pode se validar també, mp filter_input
var_dump($get);

$form->method = "get";
include __DIR__ ."/form.php";   

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

var_dump(
    filter_list(),//todos os filtros
    [
        filter_id("validate_email"),//todo filtro tem um ID
        FILTER_VALIDATE_EMAIL,//usando o mesmo de cima só com uma constante
        filter_id("string"),
        FILTER_SANITIZE_STRING
        //VALIDATE -> testa pra saber se tem um formato
        //SANITIZE -> aplica a regra pra ter esse formato
    ]
);

//validando os dados de um array
$filterForm = [
    "name" => FILTER_SANITIZE_STRIPPED,//valida a string
    "mail" => FILTER_VALIDATE_EMAIL
];

$getForm = filter_input_array(INPUT_GET, $filterForm);
var_dump($getForm);

$email = "josecampos2030.jdmail.com";//para validar uma variavel, utiliza-se o filter_var
var_dump(
    [
        filter_var($email,FILTER_VALIDATE_EMAIL)
    ],
    filter_var_array($getForm, $filterForm)//validando um variavel de array e não um input de array
);
//para validar um input, utiliza-se o filter_input