<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\joueurM;

class JoueurCtrl extends BaseController{




    public function listeJoueur(){

        $joueurModel = new joueurM();

        $joueurdata = $joueurModel->getAllarray();
        
        return view('/ListeJoueurs', ['joueur' => $joueurdata]);


    }

        function index() {
        return view('joueur/JoueurPage');
    }

}