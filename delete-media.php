<?php

require_once('connect.php');
check_account();

if(isset($_GET['id'])) {
    $sql = "SELECT * FROM media WHERE proprietario = " . $_SESSION['id'] . " AND " . "id = " . $_GET['id'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $media = mysqli_fetch_assoc($result);

        // Elimina il file dal server
        $filePath = "media/" . $media['nome_file'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Elimina il record del media dal database
        $deleteSql = "DELETE FROM media WHERE id = " . $_GET['id'];
        if (mysqli_query($conn, $deleteSql)) {
            ritorno("media.php", "Media eliminato con successo");
        } else {
            ritorno("media.php", "Errore durante l'eliminazione del media");
        }

        ritorno("media.php", "Media eliminato con successo");

    }
    ritorno("media.php", "Errore durante l'eliminazione del media");
}