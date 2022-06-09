<?php

function maior($num1,$num2,$num3) {
    if($num1 > $num2 || $num1 > $num3) {
        $maior = $num1;
    } else if($num2 > $num1 || $num2 > $num3) {
        $maior = $num2;
    } else {
        $maior = $num3;
    }
    return $maior;
}