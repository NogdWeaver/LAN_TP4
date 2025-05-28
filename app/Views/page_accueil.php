<?php 
    include("templates/header.php")
?>



<h1>
    ACCUEIL
</h1>


<div class="accgridparent">
    <div class="divacc1">
        <p>
            <a href=' <?= base_url('/listeJoueurs') ?>'> JOUEURS </a>
        </p>    
    </div>
    <div class="divacc2">
        <p> 
           <a href='<?= base_url('/listeJeux') ?>'> JEUX </a>
        </p>    
    </div>
        <div class="divacc3">
        <p>
            CLASSEMENT GENERAL
        </p>    
    </div>
    <div class="divacc4">
        <p>
            LOGIN
        </p>
    </div>
</div>
    

    
<?php
    include("templates/footer.php")
?>