<?php 
    include("templates/header.php")
?>



<h1>
    ACCUEIL
</h1>


<div class="accgridparent">
    <div class="divacc1">
        <p>
            <a href=' <?= base_url('/ListeJoueurs') ?>'> JOUEURS </a>
        </p>    
    </div>
    <div class="divacc2">
        <p> 
           <a href='<?= base_url('/ListeJeux') ?>'> JEUX </a>
        </p>    
    </div>
    <div class="divacc3">
        <p>
            <a href= '<?= base_url('/LoginPage') ?>'> LOGIN </a>
        </p>
    </div>
</div>
    

    
<?php
    include("templates/footer.php")
?>