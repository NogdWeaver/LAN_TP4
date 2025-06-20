<?php 
    include("templates/header.php")
?>

<h1 class="login-title">Se connecter</h1>

    <div class='formLogin'>
            <form method="POST" action="/login">

                <p> <label for="login">Login</label> </p>
                <p> <input id="login" name="login" type="text" /> </p>
                <p> <label for="mdp">Mot de Passe</label> </p>
                <p> <input id="mdp" name="mdp" type="password" /> </p>
                <p> <button type="submit">Se connecter</button> </p>

                <a href="<?= base_url('/') ?>" class="back-button">⬅ Retour à l’accueil</a>
            </form>
    </div>
    
<?php
    include("templates/footer.php")
?>