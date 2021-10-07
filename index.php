<?php
    /* ESERCIZIO DI OGGI*/
    //variabile paragrafo
    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, 
    sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis 
    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.';
    //lunghezza variabile
    $lenLorem = strlen($lorem);
   //GET 
    $badword = $_GET['parola'];
    //metodo sostituisci - replace
    $string2 = str_replace($badword, '***', $lorem );
    
    
?>



<!-- esercizio di oggi -->
<p> Paragrafo: <?php echo $lorem ?> </p> <!-- stampo a schermo il paragrafo con variabile lorem-->
<h2> Lunghezza del paragrafo: <?php echo $lenLorem?> </h2> <!-- stampo a schermo la lunghezza del paragrafo-->
<p> Paragrafo con parole censurate: <?php echo $string2?> </p><!-- stampo a schermo il paragrafo con parole censurate -->

<!-- str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore -->