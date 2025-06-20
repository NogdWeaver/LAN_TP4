<?php

use App\Controllers\BaseController;

class login extends BaseController {

private function loginuser(?object $user = null)  {
    
    $session = session();
    $session->set([
        'username' => isset($user) ? ($user['login']) . strtoupper($user['login']) :'admin',
        'loggedIn' => true

    ]); 
    if ()
    return view();
}


}

