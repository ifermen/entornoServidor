<?php

function parOImpar($num){
    if($num%2 == 0){
        echo $num . " es par";
    }else{
        echo $num . " es impar";
    }
}

parOImpar(21);