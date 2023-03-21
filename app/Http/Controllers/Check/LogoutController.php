<?php

namespace App\Http\Controllers\Check;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LogoutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}

