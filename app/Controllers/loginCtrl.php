<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminM;
use App\Models\joueurM;
use App\Models\UserM;


class LoginCtrl extends BaseController {


public function loginPage() {
    return view('LoginPage');

}



private function saveLoginUser($userInfo)  {
    
    $session = session();
    $session->set([
        'username' => $userInfo['login'],
        'loggedIn' => true,
        'IsAdmin'  => $userInfo['login']  == 'admin',
        'IsUser'   => true 


    ]); 
    if ($userInfo['login']  == 'admin'){
        return redirect()-> to('/admin/AdminPage');
    }
    else{
        return redirect()-> to('/joueur/JoueurPage');
    }
}

public function attemptLogin() {
    
    $userObject = new UserM();

    /*
    *$adminModel = new AdminM();
    *$joueurModel = new joueurM();
    */

    $userValues = $this->request->getPost();

    //$test = $userObject->where('login',$userValues['login'])->first();

    // var_dump($userValues);
    $rechercheUser = $userObject->getuserbyLogin($userValues['login']);
    //  var_dump($rechercheUser);
    // $idUser = $rechercheUser['iduser'];


   return $this->saveLoginUser($rechercheUser);

    
}

}

