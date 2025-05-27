<?php

namespace App\Models;
use CodeIgniter\Model;

class joueurM extends Model {

    protected $table            ='joueurs';
    protected $primaryKey       ='IDuser';
    protected $allowedFields    =['IDuser', 'NOM','PRENOM'];

    function getjoueurbyID($IDuser){

        return $this->find($IDuser);
    }


}