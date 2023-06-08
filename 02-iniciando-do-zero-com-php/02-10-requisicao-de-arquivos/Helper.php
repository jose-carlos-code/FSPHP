<?php


$Requisicao = function($dados){
    $Resposta = [];
    $Resposta['resposta']['data']['dados'] = $dados*2;
    return $Resposta;


};