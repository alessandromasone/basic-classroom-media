<?php require_once('connect.php'); ?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo contenuto</title>
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
    <div style="display: flex; justify-content:center;">
        <fieldset style="min-width: 400px">
            <legend>Nuovo materiale</legend>
            <form action="create-media.php" method="POST" enctype="multipart/form-data">

                <label for="titolo">Titolo:</label>
                <input type="text" id="titolo" name="titolo" required>

                <label for="descrizione">Descrizione:</label>
                <textarea id="descrizione" name="descrizione" required style="height: 50px"></textarea>

                <label for="materia">Materia:</label>
                <input type="text" id="materia" name="materia" required>

                <label for="file">Carica un file:</label>
                <input type="file" id="file" name="file" required>

                <input type="submit" value="Carica">
            </form>
        </fieldset>
    </div>
</body>

</html>