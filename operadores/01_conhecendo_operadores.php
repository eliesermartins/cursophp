<?php

    // operaddores de atribuição

    /* 
    
    $nome = "Elieser";// operador de atribuição

    echo $nome . " mais alguma coisa <br>"; // operador de concatenação

    $nome .= " Martins"; // operador composto

    echo $nome; 
    
    $valorTotal = 0;

    $valorTotal += 100;
    
    $valorTotal += 25;

    $valorTotal -= 10;

    echo $valorTotal . "<br/>";

    $valorTotal *= .9;

    echo $valorTotal;

    */

    /*

    // Operadores aritimeticos

    $a = 10;
    $b = 2;

    echo $a + $b;//soma
    echo '<br>';

    echo $a - $b;//subtração
    echo '<br>';

    echo $a * $b;//multiplicação
    echo '<br>';

    echo $a / $b;//divisão
    echo '<br>';

    echo $a % $b;//módulo
    echo '<br>';

    echo $a ** $b; //potenciação
    echo '<br>';

    */
    /*    

    //operadoradores de comparação

    $a = 55.0;
    $b = 55;

    var_dump($a > $b);//maior retorna false
    echo '<br>';

    var_dump($a < $b);//maior retorna true
    echo '<br>';

    var_dump($a == $b);//igualdade que compara valor retorna false
    echo '<br>';
    
    var_dump($a === $b);//igualdade que compara valor e o tipo de dados
    echo '<br>';

    var_dump($a != $b);//diferente somente o valor
    echo '<br>';

    var_dump($a !== $b);//diferente o valor e o tipo de dado
    echo '<br>';

    */
    /*

    //operadores especiais a partir do PHP 7 (spaceship)

    $a = 50;
    $b = 35;

    var_dump($a <=> $b);

    //se o $a for maior traz 1 se for igual traz 0 e se o $b for maior, traz -1

    */
    /*

    // operador Null Coalesce (para tratar/comparar valores nulos)

    $a = null;
    $b = null;
    $c = 10;

    echo $a ?? $b ?? $c;

    */

    // operadores incrementais e decrementais

    /*
    $a = 10;
    
    echo $a--;// incrementa depois e se tiver antes incrementa antes
    echo '<br>';
    echo $a;
    */

    //quem tem prioridade?
    //colchetes é só para índice de arrays
    //chaves só para função e escopos
    //&& and
    // || ou
    
    $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

    var_dump($resultado);
    


?>