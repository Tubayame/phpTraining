
<?php

function fizzBuzzQ() {
    for ($i=1; $i <= 1000; $i++){
        if ($i % 3 == 0 && $i % 5 == 0){
            echo 'Fizz Buzz';
        } elseif ($i % 3 == 0){
            echo 'Fizz';
        } elseif ($i % 5 == 0){
            echo 'Buzz';
        } else echo $i;
        echo ',';
    }
}

fizzBuzzQ();

