<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminM;

class AdminCtrl extends BaseController{

    function index() {
        return  view('templates/header') . view('admin/AdminPage') . view('templates/footer');
    }
    
}

