<?php

namespace App\Models;
use CodeIgniter\Model;

class userM extends Model {

    protected $table            ='users';
    protected $primaryKey       ='iduser';
    protected $allowedFields    =['iduser', 'login','mdp'];

    function getuserbyID($iduser){

        return $this->find($iduser);
    }

    function getuserbyLogin($loginuser){

        
        $value = $this->where('login',$loginuser)->findAll();

        return $value[0];        

    }


}
