<?php

namespace App\Models;
use CodeIgniter\Model;

class jeuM extends Model {

    protected $table            ='jeu';
    protected $primaryKey       ='IDJeu';
    protected $allowedFields    =['IDJeu', 'NOMjeu','IMGjeu','DESCjeu'];

    function getjeubyID($IDjeu){

        return $this->find($IDjeu);
    }


}