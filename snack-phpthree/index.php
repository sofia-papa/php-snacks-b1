<!DOCTYPE html>
<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo
gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP - ONE</title>
</head>
<body>
<div class="gray wrapper">
    <?php foreach ($db['teachers'] as $teach) { ?>
    <h1> <?php echo $teach["name"]; ?></h1>
    <h1> <?php echo $teach["lastname"]; ?></h1>
    <?php }; ?>
</div>
     
<div class="wrapper green">
    <?php foreach ($db['pm'] as $teach) { ?>
    <h1> <?php echo $teach["name"]; ?></h1>
    <h1> <?php echo $teach["lastname"]; ?></h1>
    <?php }; ?>
</div>



        
</body>
</html>

