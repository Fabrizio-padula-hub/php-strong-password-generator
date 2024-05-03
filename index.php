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
$userLengthPw = intval(isset($_GET['length']) ? $_GET['length'] : '');

// Array contenenti lettere minuscole, lettere maiuscole, numeri e simboli
$lowercaseLetters = range('a', 'z');
$uppercaseLetters = range('A', 'Z');
$numbers = range(0, 9);
$symbols = ['@', '#', '$', '%', '&', '*', '-', '+', '='];


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

        </main>

    </form>

    </main>
    
</body>
</html>