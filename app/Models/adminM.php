<?php

namespace App\Models;
use CodeIgniter\Model;

class adminM extends Model {

    protected $table            ='admin';
    protected $primaryKey       ='IDuser';
    protected $allowedFields    =['IDuser'];

    function getadminbyID($IDuser){

        return $this->find($IDuser);
    }


}