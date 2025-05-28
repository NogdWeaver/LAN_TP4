<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\joueurM;

class joueurCtrl extends BaseController{




    public function listejoueur(){

        $joueurModel = new joueurM();

        $joueurdata = $joueurModel->getAllarray();
        
        return view('/listeJoueurs', ['joueur' => $joueurdata]);


    }

}