<?php

namespace Source\Member;

class Config{

    public const COMPANY = "upinside";/*esses atributos pertencem a classe.
    não estão visíveis ao objeto */
    protected const DOMAIN = "upinside.com.br";
    private const SECTOR = "educação";

    //static -> acessível apenas pela classe
    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig($company, $domain, $sector){
        /* como eu quero mexer apenas na classe, eu coloco o self.
        se fosse no objeto, eu usaria o $this */
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }
}