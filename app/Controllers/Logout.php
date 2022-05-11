<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function indexlogout()
    {
        session_start();
        session_destroy();
        return redirect()->to(base_url() . "/Login/indexlogin");
    }
}
