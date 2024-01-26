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

// controllo se è stato inserita la lunghezza della password da generare
if (isset($_GET['lunghezza']) && $_GET['lunghezza'] != '' && is_numeric($_GET['lunghezza'])) {

    // assegno il valore del campo input alla variabile lunghezza
    $lunghezza = $_GET['lunghezza'];

    // se la lunghezza richiesta inserita dall'utente è un numero maggiore di 0
    if ($lunghezza > 0) {
        // genero la password richiamando la funzione creata appositamente
        $password = generaPassword($lunghezza);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Password generator</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="index.php" method="get" class="my-3">
                        <label for="lunghezza">Inserisci la lunghezza della password che vuoi generare:</label>
                        <input type="text" name="lunghezza" placeholder="Lunghezza password">
                        <button class="btn btn-success " type="submit">Genera password</button>
                    </form>
                    <div>
                        <h4><?php echo $password ?? '' ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>