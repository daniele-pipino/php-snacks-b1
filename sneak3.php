<?php
/*

BONUS SNACK
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/



// verifica che il name non sia più lungo di 3 caratteri  
if (strlen($_GET['name']) < 3) {
    echo '<li>' . 'Accesso negato, nome troppo corto' . '</li>';
}

// verifica che la mail contenga almeno . e @
if (strpos($_GET['email'], '@',) == false || strpos($_GET['email'], '.',) == false) {
    echo '<li>' . 'Accesso negato, mail non valida' . '</li>';
}

// verifica che sia un numero
if (settype($_GET['age'], 'int') == false) {
    echo '<li>' . 'Accesso negato, non è un numero' . '</li>';
} else {
    echo 'Accesso riuscito';
}


// 
