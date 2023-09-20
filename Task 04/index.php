<?php

// Fibonacci Series printing using a Function
function fibonacci($n){
    $veryOld=0;
    $old=1;
    $new =1;

    for($i =1; $i<=$n; $i++){
        echo $veryOld . "<br>";
        $old = $new;
        $new = $veryOld + $old;
        $veryOld = $old;
       
    }
    
}

fibonacci(15);