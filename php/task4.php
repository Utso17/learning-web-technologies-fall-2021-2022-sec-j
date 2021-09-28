<?php
    $inp1 = 40;
    $inp2 = 100;
    $inp3 = 10;
    if($inp1>$inp2 && $inp1>$inp3)
    {
        echo $inp1." is largest number";
    }
    elseif ($inp2>$inp1 && $inp2>$inp3) 
    {
        echo $inp2." is largest number";
    } 
    else {
        echo $inp3." is largest number";
    }
?>