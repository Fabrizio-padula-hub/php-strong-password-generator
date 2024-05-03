<?php
// funzione che scorre gli array e restituisce una
// stringa di dati presenti negli array casuali
function generateRandomPassword($length) {
    // Array contenenti lettere minuscole, lettere maiuscole, numeri e simboli
    $lowercaseLetters = range('a', 'z');
    $uppercaseLetters = range('A', 'Z');
    $numbers = range(0, 9);
    $symbols = ['@', '#', '$', '%', '&', '*', '-', '+', '='];
    
    // combinazione dei 4 array in un unico array
    $combinedArray = array_merge($lowercaseLetters, $uppercaseLetters, $numbers, $symbols);
    
    // dichiarazione variabile del return attualmente vuota
    $password = '';

    // Selezionare casualmente un elemento dall'array
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = array_rand($combinedArray);
        $password .= $combinedArray[$randomIndex];
    }

    // popolamento della variabile precedentemente vuota
    return $password;
};

?>