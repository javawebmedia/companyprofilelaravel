<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // index
    public function index()
    {
        $data = [   'title'     => 'Halaman Login',
                    'content'   => 'login/index'
                ];
        return view('login/wrapper', $data);
    }
}
