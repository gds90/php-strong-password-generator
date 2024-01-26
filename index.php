<?php

// controllo se è stato inserita la lunghezza della password da generare
if (isset($_GET['lunghezza']) && $_GET['lunghezza'] != '' && is_numeric($_GET['lunghezza'])) {
    // se la condizione risulta vera entro e avvio la sessione
    session_start();

    // assegno il valore inserito dall'utente a $_SESSION['lunghezza']
    $_SESSION['lunghezza'] = $_GET['lunghezza'];

    // effettuo un redirect a my_password.php
    header('Location: ./my_password.php');
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
                </div>
            </div>
        </div>
    </main>
</body>

</html>