<?php 

    spl_autoload_register(
        function ($class_name)
        {
            $caminhoArquivo = $class_name . '.php';
            if(file_exists($caminhoArquivo)) {
                require_once $caminhoArquivo;
            }
        }
    );

?>