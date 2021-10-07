<?php
    /*
    //definisco variabile name
    $name = 'Dario';
    //lenght
    $lenName = strlen($name);
    //frase
    $frase = 'Ciao come stai? ';
    //metodo split
    $myArray = explode(",", $frase);
    //colori
    $colori = ['giallo', 'verde', 'blu'];
    */

    /* ESERCIZIO DI OGGI*/
    //variabile paragrafo
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, 
    sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis 
    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.';
    //lunghezza variabile
    $lenLorem = strlen($lorem);
    //1° Metodo ----------------------------------
    //metodo sostituisci - replace
    $string2 = str_replace('ut', '**', $lorem );
    //2° Metodo ----------------------------------
    //variabile badword
    $badword = 'mcc';
    //GET 
    $_GET['badword'];
    
    
?>

<h1>Ciao mondo <?php echo $name ?> </h1>
<h2> <?php echo $lenName?> </h2>
<h2> <?php echo $myArray[0]?> </h2>
<h2> <?php echo $myArray[1]?> </h2>
<h2> <?php var_dump($colori) ?> </h2>


<!-- esercizio di oggi -->
<p> Paragrafo: <?php echo $lorem ?> </p> <!-- stampo a schermo il paragrafo con variabile lorem-->
<h2> Lunghezza del paragrafo: <?php echo $lenLorem?> </h2> <!-- stampo a schermo la lunghezza del paragrafo-->
<p> Paragrafo con parole censurate: <?php echo $string2?> </p><!-- stampo a schermo il paragrafo con parole censurate -->

<!-- str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore -->