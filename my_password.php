<?php
// avvio la sessione
session_start();

// assegno il valore di $_SESSION['password'] alla variabile lunghezza
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Password randomica</title>
</head>

<body>
    <div class="text-center mt-5">
        <h2>Ecco la tua password randomica:<h2>
                <h4><?php echo $password ?? '' ?></h4>
                <button class="mt-2 btn btn-primary "><i class="fas fa-copy me-2"></i>Copia</button>
    </div>
</body>

</html>