<?php


function functionName($arg1, $arg2, $arg3){
    $resposta = [$arg1, $arg2, $arg3];
    return $resposta;

}


function optionsArgs($arg1, $arg2=true, $arg3=false){//argumentos opcionais têm que ir pro final da lista
    $resposta = [$arg1, $arg2, $arg3];               /*ORDER: 1-obrigatórios, 2-importantes, 3-opcionais */
    return $resposta;
}

function calcImc(){
    global $peso;
    global $altura;
    return $peso/($altura**2);
}

function pay($price){
    static $total;
    $total+=$price;
    return "<p> O total a pagar é R$". number_format($total, 2, ",", ".") ."</p>";
}

function myTeam(){
    $teamNames = func_get_args();//pega os argumentos
    $teamCount = func_num_args();//conta os argumentos
    return ["names" => $teamNames, "count" => $teamCount];
}