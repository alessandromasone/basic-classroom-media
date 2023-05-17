<header>
    <h1>Benvenuto nel sito</h1>
    <nav>
        <ul>
            <?php if (isset($_SESSION['id'])) : ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="account.php">Account</a></li>
                <li><a href="new-media.php">Nuovo Materiale</a></li>
                <li><a href="media.php">Visualizza Materiali</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else : ?>
                <li><a href="account.php">Accedi</a></li>
                <li><a href="account.php"">Registrati</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>