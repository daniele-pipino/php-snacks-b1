<?php
/*Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. */

// data

$alunni = [
    [
        'nome' => 'Giacomo', 'cognome' => 'Desimone', 'voti' =>
        [
            7, 8, 5, 8, 9, 4, 6,
        ]
    ],
    [
        'nome' => 'Aldo', 'cognome' => 'Peppo', 'voti' =>
        [
            5, 5, 5, 3, 4, 2, 6,
        ]
    ],
    [
        'nome' => 'Giovanni', 'cognome' => 'Desimone', 'voti' =>
        [
            7, 8, 7, 6, 9, 9, 10,
        ]
    ],
];


// fuzione per trovare la media
function getMedia($arr)
{
    // somma degli elementi diviso lunghezza array
    $media = array_sum($arr) / count($arr);
    // risultato arrotondato per eccesso
    return ceil($media);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alunni</title>
</head>

<body>

    <ul>
        <?php foreach ($alunni as $alunno) : ?>
            <li>
                <p> <?php echo "$alunno[nome]  $alunno[cognome]" ?></p>
                Media: <?php echo getMedia($alunno['voti']) ?>
            </li>

        <?php endforeach ?>

    </ul>

</body>

</html>