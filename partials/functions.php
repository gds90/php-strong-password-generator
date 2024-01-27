<?php
// funzione per generare la password casuale
function generaPassword($lunghezza, $numeri, $lettere, $simboli, $ripetizione)
{
    // variabili che contengono i caratteri che possono essere usati nella generazione della password
    $caratteri_numeri = '0123456789';
    $caratteri_lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caratteri_simboli = '?!()*&%$#@^?><{}[]';

    // inizializzo la variabile che mi conterrà i caratteri da utilizzare
    $caratteri = '';

    // aggiungo i caratteri in base alle opzioni selezionate dall'utente
    if ($numeri) {
        $caratteri .= $caratteri_numeri;
    }
    if ($lettere) {
        $caratteri .= $caratteri_lettere;
    }
    if ($simboli) {
        $caratteri .= $caratteri_simboli;
    }

    // inizializzo la variabile che mi conterrà la password 
    $password = '';

    // ciclo for per recuperare un carattere random dalla variabile
    for ($i = 0; $i < $lunghezza; $i++) {
        $carattere_random = $caratteri[rand(0, strlen($caratteri) - 1)];

        // controllo se è non permessa la ripetizione di caratteri e se il carattere non è già presente nella variabile $password
        if (!$ripetizione && strpos($password, $carattere_random) !== false) {
            // se la condizione risulta vera, decremento $i e passo al prossimo ciclo
            $i--;
            continue;
        }

        // aggiungo alla variabile $password il carattere random 
        $password .= $carattere_random;
    }

    return $password;
};
