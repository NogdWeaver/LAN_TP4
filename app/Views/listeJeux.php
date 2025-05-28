
<?php

    include("templates/header.php")
?>


<?php if (empty($jeu)): ?>     
    <div class ='divlistetest'>
        Pas de Jeux!! :c 
    </div>
<?php else: ?>
    <div class ='divlistetest'>  <?= var_dump($jeu) ?>  </div>
    <?php foreach($jeu as $row): ?>
            <div class='divlistetest'>
            
            <?= 
            $row['NOMjeu'] 
            ?>

            </div>

    <?php endforeach; ?>
<?php endif; ?>



<?php
    include("templates/footer.php"); 
?>
