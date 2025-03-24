<?php

    function view($view,$data = []){
        foreach($data as $chave => $valor){
            $$valor = $valaor;
        }

        require "view/layout/app.php";
    }