
<?php

    include("templates/header.php")
?>

<h1>JOUEURS DU TOURNOI</h1>





<?php foreach($joueur as $row): ?>

    <div class="lsgridparent">

        <div class="divls1">
            <?= $row['nom'] ?>
        </div>

        <div class="divls2">
            <?= $row['prenom'] ?>
        </div>
        
        <div class="divls3">
            <?= $row['iduser'] ?> - //placeholder pour lien vers profil?//
        </div>

    </div>

    <?php endforeach; ?>

<?php
    include("templates/footer.php"); 
?>
