<?php

function quadratic($a, $b, $c){
    $discr = pow($b, 2) - 4 * $a * $c;
    if($discr < 0) {
        return false;
    } elseif($discr == 0){
        return -$b / (2 * $a);
    } elseif($discr > 0) {
        return array((-$b + sqrt($discr))/ (2 * $a), (-$b - sqrt($discr)) / (2 * $a));
    }
}

