
<?php

    include("templates/header.php")
?>


<?php if (empty($jeudata)): ?>     
    <div class ='divlistetest'> QQLCHOSE: 
   
    </div>
<?php else: ?>
    <div class ='divlistetest'> QQLCHOSE DE MIEUX:  </div>
    <?php foreach($jeudata as $row): ?>
            <div class='divlistetest'>
            
            <?= esc($row['MONjeu']) ?>

            </div>

    <?php endforeach; ?>
<?php endif; ?>



<?php
    include("templates/footer.php"); 
?>
