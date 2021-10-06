<?php declare(strict_types=1); //essa function deixa os tipos estritos (não faz conversão automatica), modo estrito desativa os castings automáticos.

//Aula 03, removendo elementos do array

//Aula 04, Autoloading Classes (definir diretorio, para que php carregue as classes sem o require)

namespace Alura;

require "autoload.php";

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

ArrayUtils::remover("12", $correntistas_e_compras);//Type Juggling acontece quando o php encontra alguma icompatibilidade no tipo e ele tenta fazer castingue automatico

var_dump($correntistas_e_compras);

echo "</pre>";

