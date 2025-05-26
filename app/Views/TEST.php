<?php

/**
 *$db = db_connect(); est équivalent à  $db = \Config\Database::connect(); 
 *  à mettre dans chaque fichier ou chaque class constructor pour la rendre disponible a toute la classe
 * 
 * $query = $db->query('YOUR QUERY HERE'); pour la requette
 * 
 *  Pour les résultats des requettes, l'utilisation du foreach ou encore la bone syntaxe $row, se référer a 
 * https://www.codeigniter.com/user_guide/database/results.html#getresultarray
 * 
 * var_dump pour vérifier 
 * 
 */

$db = db_connect();


$query = $db->query("SELECT NOMjeu FROM jeu");

foreach ($query->getResultArray() as $row){
    echo $row['NOMjeu'];
}

var_dump($row);
echo ("ok nice");

