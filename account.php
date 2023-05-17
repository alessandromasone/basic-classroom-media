<?php require_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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

        input {
            padding: 10px;
            margin-bottom: 20px;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <?php include('header.php'); ?>

    <?php if (!isset($_SESSION['id'])) : ?>

        <div style="display: flex; justify-content:center;">

            <fieldset style="min-width: 400px">
                <legend>Accedi</legend>
                <form action="login.php" method="POST">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Login">
                </form>
            </fieldset>

            <fieldset style="min-width: 400px">
                <legend>Registrati</legend>
                <form action="register.php" method="POST">
                    <label for="firstname">Nome:</label>
                    <input type="text" id="firstname" name="firstname" required>
                    <label for="lastname">Cognome:</label>
                    <input type="text" id="lastname" name="lastname" required>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Registrati">
                </form>
            </fieldset>

        </div>

    <?php else : ?>

        <div style="display: flex; justify-content:center;">
            <fieldset style="min-width: 400px">
                <legend>Profilo</legend>
                <form action="register.php" method="POST">
                    <label for="firstname">Nome:</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $_SESSION['nome'] ?>" required readonly>
                    <label for="lastname">Cognome:</label>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $_SESSION['cognome'] ?>" required readonly>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $_SESSION['username'] ?>" required readonly>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" required readonly>
                </form>
            </fieldset>
        </div>

    <?php endif; ?>

</body>

</html>