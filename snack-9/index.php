<?php
class utente
{

    public $nome;
    public $cognome;
    public $indirizzodifatturazione;
}
class utentepremium extends utente
{
    public $tipodiabbonamento;
    public $inizio;
    public $scadenza;
}
class membership extends utentepremium
{
}
