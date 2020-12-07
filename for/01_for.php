<?php

/*
for ($i = 0; $i < 100; $i++) {

    if ($i > 50 && $i < 80) continue;

    //if ($i === 900) break;
    
    echo $i . "<br>";
    */

    echo "<select>";

    for ($i=date("Y"); $i > date("Y") -100 ; $i--) { 

        echo '<option value="' . $i .'">' . $i . '</option>';

    }
    echo "<select>";
    
?>