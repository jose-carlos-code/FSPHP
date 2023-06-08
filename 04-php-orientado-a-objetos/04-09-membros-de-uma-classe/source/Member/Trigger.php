<?php 

namespace Source\Member;

class Trigger{

    public const TRIGGER = "trigger";

    public const ACCEPT = "accept";
    public const WARNING = "warning";
    public const ERROR = "error";

    private static $message;
    private static $errorType;
    private static $error;

    //exibe o erro
    public static function show($message, $errorType=null){
        self::setError($message, $errorType);
        echo self::$error;
    }

    //retorna o erro

    public static function push($message, $errorType=null){
        self::setError($message, $errorType);
        return self::$error;
    }

    //setar o erro
    private static function setError($message, $errorType){
        $reflection = new \ReflectionClass(__CLASS__);
        $errorTypes = $reflection->getConstants();

        self::$message = $message;
        self::$errorType = (!empty($errorType) || in_array($errorType, $errorTypes) ? "{$errorType}" : "");
        self::$error = "<p class='". self::TRIGGER . self::$errorType ."'>". self::$message ."</p>";
    }
}