<?php

function mayoriaEdad($edad){
    if ($edad<18){
        echo "Es menor de edad";
    }else{
        echo "Es mayor de edad";
    }
}

mayoriaEdad(21);