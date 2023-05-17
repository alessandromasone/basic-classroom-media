<?php

require_once('connect.php');
check_account();

$titolo = $_POST["titolo"];
$descrizione = $_POST["descrizione"];
$file = $_FILES["file"];
$materia = $_POST['materia'];

// Controlla se è stato caricato un file correttamente
if ($file["error"] === UPLOAD_ERR_OK) {
    $nomeOriginale = $file["name"];
    $nomeTemporaneo = $file["tmp_name"];
    $estensione = pathinfo($nomeOriginale, PATHINFO_EXTENSION);

    // Genera un nome casuale univoco per il file
    $nuovoNome = uniqid() . "." . $estensione;

    // Sposta il file dalla sua posizione temporanea alla destinazione finale
    $destinazione = "media/" . $nuovoNome;
    move_uploaded_file($nomeTemporaneo, $destinazione);

    $nomeOriginale = mysqli_real_escape_string($conn, $nomeOriginale);
    $titolo = mysqli_real_escape_string($conn, $titolo);
    $descrizione = mysqli_real_escape_string($conn, $descrizione);
    $nuovoNome = mysqli_real_escape_string($conn, $nuovoNome);
    $proprietario = mysqli_real_escape_string($conn, $_SESSION['id']);
    $materia = mysqli_real_escape_string($conn, $materia);

    // Salva i dati nel database
    $sql = "INSERT INTO media (nome_media, titolo, descrizione, nome_file, proprietario, materia) VALUES ('$nomeOriginale', '$titolo', '$descrizione', '$nuovoNome', '$proprietario', '$materia')";

    if ($conn->query($sql) === TRUE) {
        ritorno("new-media.php", "Il file è stato caricato e i dati sono stati salvati nel database con successo");
    } else {
        ritorno("new-media.php", "Errore durante il salvataggio dei dati nel database: " . mysqli_error($conn));
    }
} else {
    // Mostra un messaggio di errore se si è verificato un problema durante il caricamento del file
    ritorno("new-media.php", "Si è verificato un errore durante il caricamento del file.");
}
