<?php require_once('connect.php'); ?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        label {
            display: inline-block;
            font-size: large;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            text-align: start;
        }

        input,
        textarea {
            padding: 10px;
            margin-bottom: 20px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <div style="display: flex;">

    <?php

    $sql = "SELECT * FROM media";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            echo '<div style="padding: 10px">';
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Nome media: ' . $row['nome_media'] . '<br>';
            echo 'Titolo: ' . $row['titolo'] . '<br>';
            echo 'Descrizione: ' . $row['descrizione'] . '<br>';
            echo 'Materia: ' . $row['materia'] . '<br>';
            echo 'Visualizza: ' . '<a target="_blank" href="media/'.$row['nome_file'].'">'.$row['nome_file'].'</a>' . '<br>';
            echo '<a href="delete-media.php?id='.$row['id'].'">Elimina</a>';
            echo '</div>';
        }
    } else {
        echo "Non ci sono media";
    }
    ?>

</div>

</body>

</html>