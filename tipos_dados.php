<?php
///////////// tipo básico ///////////////////

    /*$nome = "Elieser";
    $sobrenome = "Martins";
    $anoNascimento = 1981;

    $nome1 = "Grazi";
    $sobrenome1 = "Ribeiro";
    $anoNascimento1 = 1981;

    $nomeCompleto = $nome1 . " " . $sobrenome1;
    echo $nomeCompleto;    

    exit;

    echo $nome1;
    echo "<br/>";

    unset($nome1);

    if (isset($nome1)){
        echo $nome1;
    }*/

    $nome = "Elieser";
    $site = 'www.udemy.com';

    $ano = 1981;
    $salario = 2500.99;
    $bloqueado = false;

/////////////////////// tipo compostos de dados //////////////////////////

    $frutas = array("abacaxi", "laranja", "manga");
    //echo $frutas[2];
    
    $nascimento = new DateTime();
    //var_dump($nascimento);

////////////////// tipos especiais /////////////////////////


    $arquivo = fopen("tipos_dados.php", "r");
    //var_dump($arquivo);

    $nulo = null;

    var_dump($nulo);


?>