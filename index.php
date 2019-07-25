<?php
function rectangle($n)
{
    for ($i = 0; $i < $n; $i++) {
        ?><br><?php
        for ($j = 0; $j < $n; $j++) {
            echo ' * ';
        }
    }

}

rectangle(5);

?> <br><br> <?php

function squareTriangle($n){
    for ($i=0;$i<=$n;$i++){
        ?><br><?php
        for ($j = 0;$j <= $i;$j++){
            echo ' * ';
        }
    }
}

squareTriangle(5);

?><br><br><?php

function isoscelesTriangle ($n){
    $number = $n;
    for ($i =0;$i <=$n ;$i++){
        ?><br><?php
        for ($j =0;$j<=$number;$j++ ){
            echo ' * ';
        }
        $number--;
    }

}

isoscelesTriangle(5);
