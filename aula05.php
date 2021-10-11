<?php

namespace Alura;

require 'autoload.php';

//Array 1
$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael',
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes); //essa function compara os valores dos array's e cria um novo array com valores que não possui nos dois arrays

echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";

//Array 2

$correntistas2 = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];


//array_merge() essa function mescla dois arrays

$relacionados = array_combine($correntistas2, $saldos); //essa function combina(ajunta) os valores de dois arrays

$relacionados["Mastheus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";



if(array_key_exists("João", $relacionados)){//essa function pega uma string e retorna um boolean caso o valor exista ou não no array

    echo "O saldo do João é: {$relacionados["João"]}";

}else{

     echo "Não foi encontrado";

}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";