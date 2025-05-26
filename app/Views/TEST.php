<?php

use App\Config\Database;
use CodeIgniter\Database\Query;


$db = db_connect();


$query = $db->query("SELECT NOMjeu FROM jeu");

foreach ($query->getResult('array')as $row){
    echo $row['NOMjeu'];

}

var_dump($row);
echo ("ok nice");
