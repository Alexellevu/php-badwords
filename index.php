<?php

/*  Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$paragrafo = "prova stringa di testo per php e inizio back-end";


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
   <p><?php echo $paragrafo ?></p>
   <?php var_dump($paragrafo) ?>
   <h3>la lunghezza della stringa è: <?php echo strlen($paragrafo) ?></h3>
</body>
</html>