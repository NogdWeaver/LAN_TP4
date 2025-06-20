<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class LoginCtrl extends BaseController {


public function loginPage() {
    return view('LoginPage');

}



private function loginUser(?object $user = null)  {
    
    $session = session();
    $session->set([
        'username' => $user = $user['login'],
        'loggedIn' => true,

    ]); 
    if ($user['login']  == 'admin'){
        return view('admin/AdminPage');
    }
    else{
        return view('joueur/JoueurPage');
    }
}

public function attemptLogin() {
    
    
    
}

}

