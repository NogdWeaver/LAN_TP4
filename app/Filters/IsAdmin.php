<?php

namespace App\Filters;

use CodeIgniter\Filters\Filterinterface;
use CodeIgniter\HTTP\Requestinterface;
use CodeIgniter\HTTP\ResponseInterface;

class IsAdmin implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null)
    {
        $session = service('session');
        $loggedIn = $session->get('IsAdmin');
        if(!$loggedIn)
        {
            return redirect()->to('/login');
        }
        return $request;
    }
    public function after(Requestinterface $request, ResponseInterface $response, $arguments = null)
    {
        return $response;
    }     

}
