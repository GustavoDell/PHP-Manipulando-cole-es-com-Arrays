<?php

class Calculadora 
{

    public function calculaMedia(array $notas): ?float // ? interrogação indica que está querendo retornar null ou float na function
    {
        
        $quantidadeNotas = sizeof($notas); //Função sizeof() retorna o numero de elementos que array possui

        if ($quantidadeNotas > 0) 
        {
            
            $soma = 0;
            
            for ($i = 0; $i < $quantidadeNotas; $i++) 
            {

                $soma = $soma + $notas[$i];
        
            }

            $media = $soma / $quantidadeNotas;

            return $media;

        }else
        {
            return null;
        }  
    }
}