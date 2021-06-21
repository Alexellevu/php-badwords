<?php

/*  Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

$paragrafo = "prova di una stringa di testo per php e di inizio back-end per boolean";
 $censura = $_GET['cens'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1,h2{
      color:green; 
      background-color:cyan; 
      width:60%;
      text-transform:uppercase;
      padding:20px;
      border-radius:8px;
      
    }
    </style>
  
</head>
<body>
   <h2>Frase iniziale: <br> <?php echo $paragrafo ?></h2>
   <?php var_dump($paragrafo) ?>
   <h2>la lunghezza della stringa è: <?php echo strlen($paragrafo) ?></h2>
    <h1>la nuova stringa censurata sarà:</h1>
    <h2><?php echo str_replace($censura,'***',$paragrafo)?> di lunghezza: <?php echo strlen($paragrafo) ?></h2>

    

    
   <h4></h4>
</body>
</html>