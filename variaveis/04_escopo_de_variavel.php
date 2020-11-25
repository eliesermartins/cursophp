<?php

    $nome = "Elieser";

    function teste (){
        global $nome;
        echo $nome;
        echo '<br/>';
    }

    function teste2(){
        $nome = "Sofia";
        echo $nome . " agora no teste 2";
    }

    teste();
    teste2();

?>