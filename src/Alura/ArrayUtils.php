<?php declare(strict_types=1); //essa function deixa os tipos estritos (não faz conversão automatica), modo estrito desativa os castings automáticos.

namespace Alura;// deve se ter o mesmo nome do namespace na pasta.

class ArrayUtils 
{
    public static function remover(string $elemento, array &$array): void //&colcando &, o elemento é passado por referencia portanto ele não cria uma copia do que foi passado
    {
        $posicao = array_search($elemento, $array, true); //array_search() busca um elemento dentro do array e devolve a posição que esse elemento se encontra
        //se colocamos o terceiro parametro como true ele compara o conteudo e o tipo

        if(is_int($posicao)) { //is_int() essa function aceita como argumento um numero inteiro e se for realmente um numero ele retorna true e se não for numero retorna false

            unset($array[$posicao]); //a function unset() remove elementos do array
    
        }else {

            echo "Elemento não foi encontrado no array";

        }
    }
    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach($array as $chave => $valor) {

            if($valor > $saldo) {
                $correntistasComSaldoMaior[] = $chave;
            }            
        }

        return $correntistasComSaldoMaior;
    }
}