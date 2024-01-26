<?php
// includo il file delle funzioni
include __DIR__ . '/partials/functions.php';

// avvio la sessione
session_start();

// assegno il valore di $_SESSION['lunghezza'] alla variabile lunghezza
$lunghezza = $_SESSION['lunghezza'];

// se la lunghezza richiesta inserita dall'utente è un numero maggiore di 0
if ($lunghezza > 0) {
    // genero la password richiamando la funzione creata appositamente
    $password = generaPassword($lunghezza);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Password randomica</title>
</head>

<body>
    <div>
        <h2>Ecco la tua password randomica:<h2>
                <h4><?php echo $password ?? '' ?></h4>
    </div>
</body>

</html>