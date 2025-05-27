<?php

namespace App\Models;
use CodeIgniter\Model;

class userM extends Model {

    protected $table            ='users';
    protected $primaryKey       ='IDuser';
    protected $allowedFields    =['IDuser', 'LOGIN','MDP'];

    function getuserbyID($IDuser){

        return $this->find($IDuser);
    }


}
