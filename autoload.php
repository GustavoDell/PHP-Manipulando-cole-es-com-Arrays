<?php
spl_autoload_register(
    function(string $namespaceClasse): void
    {
        $caminho = "/src";// caminho dá onde será carregado os arquivos
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);//função para implementar o autoloading;
