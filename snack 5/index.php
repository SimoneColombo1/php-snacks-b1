<?php


$testo = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo magni, aliquam, dignissimos aut fuga distinctio ipsa sapiente officia illum eligendi accusamus dolores eaque facere quidem reprehenderit modi ullam voluptatibus illo. ";


$frasi = explode('.', $testo);


$frasi = array_filter(array_map('trim', $frasi));


$NUovotesto = array_map(function ($frase) {
    return "inizio periodo" . $frase . "fine periodo";
}, $frasi);


$stampa = implode($NUovotesto);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $stampa; ?>

    </p>
</body>

</html>