<?php

session_start();

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic-classroom-media";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

function ritorno($link, $message = "")
{
    if ($message != "") {
        $link .= '?message=' . $message;
    }
    header("Location: " . $link);
    die();
}

function check_account() {
    if (!isset($_SESSION['id'])) {
        header("Location: account.php");
        die();
    }
}

if (isset($_GET['message'])) {
    echo '<p>'.$_GET['message'].'</p>';
}
