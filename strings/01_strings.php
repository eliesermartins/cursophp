<?php

    /*
    $nome = "Hcode";

    $nome2 = 'Treinamentos';

    //var_dump ($nome, $nome2);

    // Vc consegue colocar variáveis dentro das aspas duplas
    // com aspas simples ele entende que tudo é texto
    
    echo 'ABC $nome';
    */
    /*
    $nome = "elieser martins";

    $nome = strtoupper($nome);//converte tudo pra maiusculo

    echo $nome;
    
    $nome = strtolower($nome);//converte tudo para minusculo
    
    echo "<br>";

    echo $nome;

    echo "<br>";

    echo ucfirst($nome);// primeira letra de cada palavra maiuscula
    */

    /*
    $nome = "Hcode";
    echo $nome;
    echo "<br>";
    $nome = str_replace("o", "0", $nome);// troca de caracteres
    $nome = str_replace("e", "3", $nome);

    echo $nome;

    echo "<br>";
    */

    $frase = "A repetição é a mãe da retenção.";

    $palavra = "mãe";

    $q = strpos($frase, $palavra);

    $texto = substr($frase, 0, $q);

    var_dump($texto);

    echo "<br>";

    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

    var_dump($texto2);

    echo "<br>";

    echo $texto . $palavra . $texto2;

?>