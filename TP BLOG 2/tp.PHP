<?php
$title = "Connexion";

include 'templates/authentification/layout.php'
?>
<div class="w-50 h-100 d-flex justify-content-center align-items-center m-auto">
    <div class="w-100 bg-white p-5 rounded">
        <h1 class="text-center"><?= $title ?></h1>
        <form action="authentification/connexion.php" method="post">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email">
            <label class="form-label mt-3" for="password">Mot de passe</label>
            <input class="form-control" id="password" type="password" name="password">
            <button class="btn btn-primary mt-3 w-100" type="submit">Se connecter</button>
        </form>

        <!-- Gestion des erreurs -->
        <?php if (isset($_SESSION['connection_error_email'])): ?>
            <p><?= $_SESSION['connection_error_email'] ?></p>
        <?php endif; ?>
        <?php if (isset($_SESSION['connection_error_password'])): ?>
            <p><?= $_SESSION['connection_error_password'] ?></p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>