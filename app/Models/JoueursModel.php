<?php

namespace App\Models;

use CodeIgniter\Model;

class JoueursModel extends Model {

    protected $table = 'joueurs';
    protected $primaryKey = 'IDuser';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['IDuser', 'NOM', 'PRENOM'];
}