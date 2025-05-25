<?php

namespace App\Controllers;

use App\Models\JoueursModel;

class JoueurCtrl extends BaseController {

    public function liste(){

        $db = \Config\Database::connect();
        $JoueurModel = new JoueursModel();
        

    }
}