<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminM;
use App\Models\joueurM;
use App\Models\userM;

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
    
    $userModel = new userM();
    $adminModel = new AdminM();
    $joueurModel = new joueurM();

    $values = $this->request->getPost(['login', 'mdp']);
    var_dump($userModel->getuserbyLogin('admin'));

    /*
    if ($values['login'] == $userModel['login'] && $values['mdp'] == $userModel['mdp']) {

        1+1;
        
    }
    */
}

}

