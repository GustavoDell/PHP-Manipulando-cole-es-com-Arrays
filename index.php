<?php

require 'Calculadora.php';

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

if($media) {
    echo "A média é: $media";
} else {
 echo "Não foi possivel calcular á média";
}


// 02.Funções com arrays  

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo) {

    echo "<p>O saldo é $saldo </p>";

}

echo "<pre>"; //tag <pre> deixa o texto formatado e com isso é possivel visualizar o var_dump();

var_dump($saldos);

sort($saldos); // A função sort() ordena o conteudo dos arrays

var_dump($saldos);

echo "</pre>";

echo "O menor saldo é $saldos[0]";


// Continuação exibindo nomes Explode e Implode

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes); // a função explode ele corta o conteudo do texto de acordo com delimitador que foi passado e retorna um array

foreach ($array_nomes as $nome) {

    echo "<p>Olá $nome</p>";

}

var_dump($array_nomes);

$nomesJuntos = implode(", ", $array_nomes); // a função implode transforma um array em string utilizando o parametro chamado $glue(cola), isso ajunta cada um dos elementos do array em uma unica string

echo "<p>Nomes Juntos: $nomesJuntos</p>";