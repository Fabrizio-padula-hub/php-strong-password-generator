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
</head>
<body>

    <main>
    <!-- Creare un form che invii in GET la lunghezza della pw -->
    <form method="GET">
        <span>Lungheza password</span>
        <input type="text" name="length">
        <button>Crea</button>
    </form>

    <!-- stampare la password generata -->
    <div>
        <span>La password generata è: <?php echo $password?></span>
    </div>

    </main>
    
</body>
</html>