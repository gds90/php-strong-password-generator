<?php
// funzione per generare la password casuale
function generaPassword($lunghezza)
{
    // variabile che contiene i caratteri che possono essere usati nella generazione della password
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789?!()*&%$#@^?';

    // inizializzo la variabile che mi conterrà la password 
    $password = '';

    // ciclo for per recuperare un carattere random dalla variabile
    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }

    return $password;
};
