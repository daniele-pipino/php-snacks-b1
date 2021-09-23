<?php

/*

SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.

*/


function get_Random_Number()
{
    $numbers = [];

    do {
        $random = rand(1, 100);
        if (!in_array($random, $numbers)) {
            $numbers[] = $random;
        }
    } while (count($numbers) < 15);
    return $numbers;
}
// risultato funzione
$random_Numbers = get_Random_Number();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php foreach ($random_Numbers as $number) : ?>
            <li> <?php echo $number ?> </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>