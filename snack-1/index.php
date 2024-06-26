<?php

$Partite = [
    [
        "Squadra1" => "milano",
        "Squadra2" =>  "roma",
        "risultato" => "80-31",
    ],
    [
        "Squadra1"  => "venezia",
        "Squadra2"  =>   "catanzaro",
        "risultato"  => "90-77",
    ],
    [
        "Squadra1"  => "ostia",
        "Squadra2"  => "lido",
        "risultato"  => "8-91",
    ],
];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    foreach ($Partite as $Partita) { ?>
        <p>
            <?php echo $Partita['Squadra1']; ?>
            <?php echo $Partita['Squadra2']; ?>
            <?php echo $Partita['risultato']; ?>

        </p>
    <?php  }; ?>


</body>

</html>