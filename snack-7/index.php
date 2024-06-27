<?php
include_once __DIR__ . '/array.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>

        <div>

            <?php

            foreach ($studenti as $studente) {
            ?>
                <p> <?php echo $studente['nome'] ?>
                <p> <?php echo $studente['cognome'] ?>

                <?php  } ?>








        </div>


    </main>

</body>

</html>