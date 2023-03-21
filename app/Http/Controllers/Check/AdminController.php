<?php

namespace App\Http\Controllers\Check;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function admin(){
        return view('Backend.dashboard');
    }
}

