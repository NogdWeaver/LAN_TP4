<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\jeuM;

class jeuCtrl extends BaseController{




    public function listejeux(){

        $jeuModel = new jeuM();

        $jeudata = $jeuModel->getAllarray();

        var_dump($jeudata);
        
        return view('/listeJeux', $jeudata);

    }

}