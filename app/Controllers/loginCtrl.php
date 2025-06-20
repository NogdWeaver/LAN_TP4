<?php

use App\Controllers\BaseController;

class LoginCtrl extends BaseController {
    

public function loginPage(): string {
    return view('/loginPage');
}



private function loginUser(?object $user = null)  {
    
    $session = session();
    $session->set([
        'username' => $user = $user['login'],
        'loggedIn' => true,

    ]); 
    if ($user['login']  == 'admin'){
        return view('');
    }
    else{
        return view('');
    }
}

public function attemptLogin() {
    

    
}

}

