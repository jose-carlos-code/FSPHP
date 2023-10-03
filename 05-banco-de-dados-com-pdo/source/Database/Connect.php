<?php
namespace Source\Database;
use \PDO;
use \PDOException;
class Connect{
    private const HOST = "localhost";
    private const USER = "root";
    private const DBNAME = "fullstackphp";
    private const PASSWD = "";

     //opções de inicialização de como que o PDO vai se comunicar com o banco de dados
    private const OPTIONS = [
        //garantindo que o charset é o mesmo do banco de dados
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //todo erro que acontercer através da pdo vai se um  pdo errmode exception
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //os resultados vão vir como object
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        /*case natural garente que a gente utilize o nome exato das colunas
        do banco de dados*/
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];
    private static $instance;
    /**
     * @return PDO
     */
    public static function getInstance(): PDO{
        //verificando se já não há conexão com banco de dados
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DBNAME." ",//qual sgdb, qual banco
                    self::USER, //username,
                    self::PASSWD, //senha
                    self::OPTIONS
                );
            }catch(PDOException $exception){
                //exibe uma mensagem ao mesmo tempo que trava o código
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }
        return self::$instance;
    }

    //garante que não vai ter mais de uma instância
    private function __construct(){

    }

    //garante que ele não vai clonar o objeto
    private function __clone(){

    }
}