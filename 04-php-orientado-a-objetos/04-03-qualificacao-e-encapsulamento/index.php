<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/Classes/App/Template.php";

require __DIR__ . "/Classes/Web/Template.php";

$appTemplate = new App\Template(); //importar o namespace
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);

use App\Template;
use Web\Template AS WebTemplate;//o PHP não permite 2 Templates

$appUseTemplate = new Template();//instanciando a classe
$webUseTemplate = new WebTemplate();//instanciando a classe

var_dump($appUseTemplate,$webUseTemplate);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "\Source\Qualifield\User.php";

$user = new \Source\Qualifield\User();

// $user->setFirstName("josé");
// $user->setLastName("carlos");

var_dump($user);


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$jose = $user->setUser(
    "josé",
    "carlos",
    "josecampos2030.jdk@gmail.com"
);

if(!$Jose){
    echo "<p class='trigger error'> {$user->getError()} </p>";
}

$kaue = new \Source\Qualifield\User();

$kaue->setUser("kaue", "cardoso", "cursos@upinside.com.br");

var_dump($user, $kaue);