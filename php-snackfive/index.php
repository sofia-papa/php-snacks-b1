<!DOCTYPE html>
<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->
<?php 
$articolo = 
    "Il green pass sui luoghi di lavoro agita anche il mondo della scuola.
     Nonostante l’obbligatorietà sia in vigore dalla prima campanella,
      l’estensione del certificato verde si accompagna alla mobilitazione della Federazione
       italiana sindacati intercategoriali, che annuncia uno sciopero generale a oltranza -
        da domani fino al 20 ottobre - contro la richiesta di presentazione del certificato.
         Una mobilitazione che interessa i settori pubblici e privati e che potrebbe impattare
          anche sul normale svolgimento dell’attività scolastica.
    E c’è chi gioca d’anticipo e decide di sospendere in via cautelativa i servizi:
    è il caso dell’Istituto comprensivo Nord 1, che ha avvisato i genitori con una circolare:
  «I servizi pre-post scuola e pedibus e tutti gli altri servizi ove presenti sono sospesi».
   Una scelta indipendente dalla possibilità di garantire il servizio da parte del Comune,
    spiega l’assessore alla Scuola Fabio Capra: «Noi possiamo garantire i servizi anche 
    in caso di sciopero, è stata la scuola stessa a chiederci la sospensione del prescuola.
     Abbiamo quindi avvisato il personale delle cooperative che lo gestiscono».
      A causa dello sciopero anche i servizi di trasporto pubblico potrebbero subire modifiche.
       Intanto, secondo i dati del report settimanale sulla diffusione del contagio nelle scuole,
        le classi in quarantena sono 40 come la scorsa settimana, per un totale di 751 studenti e
         32 operatori.
 Lo scorso anno, in questi giorni, il numero degli studenti in isolamento raddoppiava.";

 $paragrafiDivisi = explode('.', $articolo);
 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ONE</title>
</head>
<body>
    <ol>
        <?php foreach($paragrafiDivisi as $parSing){ ?>
         <li><?php echo $parSing; ?>
         </li>
      <?php }; ?>
      
        
    </ol>
</body>
</html>