<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController

{
    public function index()
    {
        return view('user/landingPage');
    }
    
    public function login()

    {
        return view('user/loginPage');
    }

        public function signup()

    {
        return view('user/signupPage');
    }

    public function moodboard()

    {
        return view('user/moodboardPage');
    }

    public function roadmap()

    {
        return view('user/roadmapPage');
    }
}
