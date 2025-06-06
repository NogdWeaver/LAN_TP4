
<?php

    include("templates/header.php")
?>

<h1>JEUX DU TOURNOI</h1>





<?php foreach($jeu as $row): ?>

    <div class="lsgridparent">

        <div class="divls1">
            <?= $row['nomjeu'] ?>
        </div>

        <div class="divls2">
            <?= $row['descjeu'] ?>
        </div>
        
        <div class="divls3">
           <img src=" <?= $row['imgjeu'] ?>">
        </div>

    </div>

    <?php endforeach; ?>

<?php
    include("templates/footer.php"); 
?>
