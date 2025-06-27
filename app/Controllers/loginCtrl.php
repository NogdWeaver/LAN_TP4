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



private function loginUser($userInfo)  {
    
    $session = session();
    $session->set([
        'username' => $userInfo['login'],
        'loggedIn' => true,

    ]); 
    if ($userInfo['login']  == 'admin'){
        return view('admin/AdminPage');
    }
    else{
        return view('joueur/JoueurPage');
    }
}

public function attemptLogin() {
    
    $userObject = new userM();
    $adminModel = new AdminM();
    $joueurModel = new joueurM();

    $userValues = $this->request->getPost(['login', 'mdp']);
    $test = $userObject->where('login',$userValues['login'])->first();


    $rechercheUser = $userObject->getuserbyLogin($userValues['login']);
    //$idUser = $rechercheUser['iduser'];


    return $this->loginUser($rechercheUser);

    
}

}

