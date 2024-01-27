<?php
// includo il file delle funzioni
include __DIR__ . '/partials/functions.php';

// controllo se è stato inserita la lunghezza della password da generare
if (isset($_GET['lunghezza']) && is_numeric($_GET['lunghezza']) && ($_GET['lunghezza'] > 0)) {
    // controllo che almeno un'opzione su come generare la password sia selezionata
    if (isset($_GET['numeri']) || isset($_GET['lettere']) || isset($_GET['simboli'])) {
        // se la condizione risulta vera entro e avvio la sessione
        session_start();

        // assegno il valore di $_GET['lunghezza'] alla variabile lunghezza
        $lunghezza = $_GET['lunghezza'];

        // assegno i valori delle opzioni scelte (diventano true se selezionati)
        $numeri = ($_GET['numeri']);
        $lettere = ($_GET['lettere']);
        $simboli = ($_GET['simboli']);
        $ripetizione = ($_GET['ripetizione']);

        // genero la password richiamando la funzione creata appositamente
        $password = generaPassword($lunghezza, $numeri, $lettere, $simboli, $ripetizione);

        // assegno il valore inserito dall'utente a $_SESSION['password']
        $_SESSION['password'] = $password;

        // effettuo un redirect a my_password.php
        header('Location: ./my_password.php');
    } else {
        $messaggio = "Scegli almeno un'opzione tra includere numeri, lettere o simboli.";
    }
} else {
    if (!isset($_GET['lunghezza'])) {
        // inizializzo la variabile $messaggio
        $messaggio = '';
    } else {
        // se la lunghezza non è stata inserita mostro un messaggio di errore
        $messaggio = "Attenzione, assicurati di inserire la lunghezza della password desiderata";
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
                        <div class="row">
                            <div class="col-12 mb-2">
                                <h1>Generatore di password randomiche</h1>
                                <label for="lunghezza" class="me-1 mt-2">Inserisci la lunghezza della password che vuoi generare:</label>
                                <input type="text" name="lunghezza" id="lunghezza" placeholder="Lunghezza password">
                            </div>
                            <span>Scegli cosa includere nella password che vuoi generare (scegli almeno una delle opzioni):</span>
                            <div class="col-12 my-2">
                                <input type="checkbox" name="numeri" id="numeri">
                                <label for="numeri" class="me-3">Includi numeri</label>
                                <input type="checkbox" name="lettere" id="lettere">
                                <label for="lettere" class="me-3">Includi lettere</label>
                                <input type="checkbox" name="simboli" id="simboli">
                                <label for="simboli" class="me-3">Includi simboli</label>
                                <input type="checkbox" name="ripetizione" id="ripetizione">
                                <label for="ripetizione">Permetti ripetizione di caratteri</label>
                            </div>
                            <div class="mt-3">
                                <button class=" btn btn-success " type=" submit">Genera password</button>
                            </div>
                            <div class="mt-5">
                                <h4><?php echo $messaggio ?? '' ?></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>