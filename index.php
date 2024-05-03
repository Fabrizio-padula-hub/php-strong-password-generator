<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password
casuale (composta da lettere, lettere maiuscole, numeri e simboli) da
restituire all’utente. Scriviamo tutto (logica e layout)
in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice,
spostiamo la logica in un file functions.php che includeremo poi
nella pagina principale -->
<?php
require_once __DIR__ . '/functions.php';

// lettura del GET e popolamento della variabile da usare
$userLengthPw = intval(isset($_GET['length']) ? $_GET['length'] : '');


// password generata dagli array per il numero che ha scritto l'utente
$password = generateRandomPassword($userLengthPw);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>Password Generator</h1>
            <h4>Genera una password sicura</h4>
        </div>

    </header>

    <main>
    <!-- Creare un form che invii in GET la lunghezza della pw -->
    <div class="p-3 mb-2 bg-info-subtle text-info-emphasis">
        <div class="container">
            <form method="GET">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="basic-addon1">Lungheza password</span>
                    <input type="text" name="length" class="form-control" placeholder="inserisci il numero di caratteri desiderato per la tua password" aria-label="Username" aria-describedby="basic-addon1" require>
                    <button class="btn btn-info">Crea</button>
                </div>
                
            </form>
        </div>
    </div>

    <!-- stampare la password generata -->
    <div class="p-3 mb-2 bg-info text-dark">
        <div class="container">
            <span class="alert alert-info" role="alert">
                La password generata è: 
                <?php echo $password?>
            </span>
        </div>
    </div>

    </main>
    
</body>
</html>