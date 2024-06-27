<?php
include   __DIR__ . '/index.php';



$Animali = [

    [
        'nome' => 'cane',
        'specie' => 'canina',
        'classe' => 'mammifero'
    ],

    [
        'nome' => 'gatto',
        'specie' => 'felino',
        'classe' => 'mammifero'
    ],

    [
        'nome' => 'pappagalo',
        'specie' => 'pappagallius',
        'classe' => 'uccello'
    ],

    [
        'nome' => 'trota',
        'specie' => 'trotus',
        'classe' => 'pesce'
    ],


    [
        'nome' => 'lemure',
        'specie' => 'lemuris',
        'classe' => 'mammifero'
    ],


    [
        'nome' => 'gorilla',
        'specie' => 'calabrus',
        'classe' => 'mammifero'
    ],

    [
        'nome' => 'lucertola',
        'specie' => 'lucertulus',
        'classe' => 'rettile'
    ],

    [
        'nome' => 'vipera',
        'specie' => 'serpenti',
        'classe' => 'rettile'
    ],




];

$mammiferi = array_filter($Animali, 'mammifero');
$rettili = array_filter($Animali, 'rettile');
$pesci = array_filter($Animali, 'pesce');
$uccelli = array_filter($Animali, 'uccello');
