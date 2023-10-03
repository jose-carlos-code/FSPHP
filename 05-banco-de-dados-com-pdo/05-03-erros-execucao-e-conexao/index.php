<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.03 - Errors, conexão e execução");

/*
 * [ controle de erros ] http://php.net/manual/pt_BR/language.exceptions.php
 */
fullStackPHPClassSession("controle de erros", __LINE__);
try{
    // throw new Exception("Exception");
    // throw new PDOException("Exception");
    throw new ErrorException("ErrorException");
}catch(PDOException | ErrorException $exception){
    var_dump($exception);
}catch(Exception $exception){
    echo "<p class='trigger'>{$exception->getMessage()}</p>";
}finally{
    echo "<p class='trigger'>A execução terminou</p>";
}

/*
 * [ php data object ] Uma classe PDO para manipulação de banco de dados.
 * http://php.net/manual/pt_BR/class.pdo.php
 */
fullStackPHPClassSession("php data object", __LINE__);
try{
    $pdo = new PDO(
        "mysql:host=localhost;dbname=fullstackphp",//qual sgdb, qual banco
        "root", //username,
        "", //senha
        [   //opções de inicialização de como que o PDO vai se comunicar com o banco de dados
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"//garantindo que o charset é o mesmo do banco de dados
        ]
    );
    $stmt = $pdo->query("SELECT * FROM users LIMIT 3");//executando uma query com pdo
    while($user = $stmt->fetch(PDO::FETCH_ASSOC)){//::FETCH_ASSOC -> traz uma array associativo
        var_dump($user);
    }
}catch(PDOException $exception){

}

/*
 * [ conexão com singleton ] Conextar e obter um objeto PDO garantindo instância única.
 * http://br.phptherightway.com/pages/Design-Patterns.html
 */
fullStackPHPClassSession("conexão com singleton", __LINE__);
//chamando o arquivo autoload.php
require __DIR__ . "/../source/autoload.php";
use Source\Database\Connect;
$pdo1 = Connect::getInstance().
$pdo2 = Connect::getInstance();
var_dump($pdo1, $pdo2);
