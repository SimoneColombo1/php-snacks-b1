<?php
$_GET['name'];
$_GET['mail'];
$_GET['age'];

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="name" id="name">
        <input type="email" name="mail" id="mail">
        <input type="text" name="age" id="age">
        <input type="submit">
    </form>

    <?php

    if (strlen($_GET['name']) > 3 && strpos($_GET['mail'], '.') && is_numeric($_GET['age'])) {

        echo "accesso garantito";
    }

    ?>
</body>

</html>