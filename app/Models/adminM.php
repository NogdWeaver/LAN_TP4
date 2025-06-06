<?php

namespace App\Models;
use CodeIgniter\Model;

class adminM extends Model {

    protected $table            ='admin';
    protected $primaryKey       ='iduser';
    protected $allowedFields    =['iduser'];

    function getadminbyID($iduser){

        return $this->find($iduser);
    }


}