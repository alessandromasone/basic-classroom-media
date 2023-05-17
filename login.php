<?php

require_once('connect.php');


// Controllo se sono stati inviati tutti i campi del form
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    ritorno("index.php", "Uno o più campi non presenti");
}

// Prendo i dati inviati dal form
$username = $_POST['username'];
$password = $_POST['password'];

// Eseguo l'escape dei caratteri speciali per evitare problemi di SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Creo la query per selezionare l'utente con le credenziali inserite
$sql = "SELECT * FROM utenti WHERE username='$username' AND password='$password'";

// Eseguo la query e controllo se è andata a buon fine
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $user = mysqli_fetch_assoc($result);

    // Salvataggio variabili nella sessione
    $_SESSION['username'] = $user['username'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['cognome'] = $user['cognome'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['id'] = $user['id'];

    // L'utente è stato trovato nel database, quindi il login è avvenuto con successo
    ritorno("index.php", "Login avvenuto con successo!");
} else {
    // L'utente non è stato trovato nel database, quindi le credenziali inserite non sono corrette
    ritorno("account.php", "Username o password errati");
}

// Chiudo la connessione al database
mysqli_close($conn);