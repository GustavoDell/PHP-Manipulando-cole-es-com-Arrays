<?php declare(strict_types=1); //essa function deixa os tipos estritos (não faz conversão automatica), modo estrito desativa os castings automáticos.

//removendo elementos do array

require 'ArrayUtils.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    "Luis",
    "Luisa",
    "12",
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);//Type Juggling acontece quando o php encontra alguma icompatibilidade no tipo e ele tenta fazer castingue automatico

var_dump($correntistas_e_compras);

echo "</pre>";

