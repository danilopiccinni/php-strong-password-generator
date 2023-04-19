<?php

session_start();

function generatePassword() {

    $length = $_GET['lenght'] ?? '';


    //consideriamo i caratteri da randommizzare
    $alfaNumber = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $lenAlfaNumber = strlen($alfaNumber);
    $passRandom = "";
    $i=0;

    //vado a pescare i caratteri uno per uno finchè con raggiungo il valore di $length
    while($i<$length) {
        //con rand trovo l'indice casuale
        $numberRandom = rand(0,$lenAlfaNumber-1);
        $passRandom .= $alfaNumber[$numberRandom];
        $i++;
    }
    $_SESSION['password'] = $passRandom;
    return $passRandom;
}

function generatePasswordRandom() {

    $length = $_GET ['randomLenght'] ?? '';


    //consideriamo i caratteri da randommizzare
    $alfaNumber = "abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $lenAlfaNumber = strlen($alfaNumber);
    $passRandom = "";
    $i=0;

    //vado a pescare i caratteri uno per uno finchè con raggiungo il valore di $length
    while($i<$length) {
        //con rand trovo l'indice casuale
        $numberRandom = rand(0,$lenAlfaNumber-1);
        $passRandom .= $alfaNumber[$numberRandom];
        $i++;
    }

    $_SESSION['password'] = $passRandom;
    return $passRandom;
    }