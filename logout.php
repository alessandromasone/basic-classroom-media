<?php

require_once('connect.php');

// Distrugge la sessione
session_destroy();

// Reindirizza l'utente alla pagina di login
ritorno("account.php", "Logout effettuato con successo");
die();