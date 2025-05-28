<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\jeuM;

class jeuCtrl extends BaseController{




    public function listejeux(){

        $jeuModel = new jeuM();

        $jeudata = $jeuModel->getAllarray();

       /*  var_dump($jeudata); */
        
        return view('/listeJeux', ['jeu' => $jeudata]);

        /* le 'jeu' dans ['jeu' => $jeudata] correspond a la variable utilisable dans la view
        * En gros c'est la "clé" qui associe la varialble qu'on va utiliser et le tableau */
    }

}