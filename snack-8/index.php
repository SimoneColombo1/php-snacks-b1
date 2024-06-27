<?php
include __DIR__ . '/array.php';


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

        <?php

        foreach ($mammiferi as $mammifero) {
            echo $mammifero;
        }
        foreach ($uccelli as $uccello) {
            echo $uccello;
        }
        foreach ($rettili as $rettile) {
            echo $rettile;;
        }
        foreach ($pesci as $pesce) {
            echo $pesce;
        }



        ?>
    </main>
</body>

</html>