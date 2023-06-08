<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$nome = "josé, carlos, teste,";
var_dump(strlen($nome), substr($nome, 6), mb_substr($nome, 5));

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);
var_dump(mb_strtoupper($nome), mb_strtolower($nome));

var_dump(mb_convert_case($nome, MB_CASE_UPPER), mb_convert_case($nome,MB_CASE_LOWER));

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);
var_dump(mb_strpos($nome, ","), mb_strrpos($nome, ","));

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);