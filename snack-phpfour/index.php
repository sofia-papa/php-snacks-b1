<!DOCTYPE html>
<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$classe = [
    [
        'nome' => "Gianni",
        'cognome' => "Versace",
        'voti' => [6, 8, 10, 7]
    ],
    [
        'nome' => "Luca",
        'cognome' => "Pucci",
        'voti' => [6, 5, 3, 6]
    ],
    [
        'nome' => "Paolo",
        'cognome' => "Prada",
        'voti' => [6, 6, 6, 7]
    ],
    [
        'nome' => "Alessandro",
        'cognome' => "Conti",
        'voti' => [6, 5, 5, 5]
    ],
]


; ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ONE</title>
</head>
<body>
     <?php foreach($classe as $class){ ?>
     <h1><?php echo $class['nome']; ?></h1>
     <h1><?php echo $class['cognome']; ?></h1>
     <h1><?php echo array_sum($class['voti']) / count($class['voti']) ; ?></h1>
     <?php }; ?>
</body>
</html>
