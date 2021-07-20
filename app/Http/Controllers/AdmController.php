<?php

namespace App\Http\Controllers;

use App\Models\ParametrosModel;
use App\Models\UsuariosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class AdmController extends Controller {

    public function index() {
        return view('login_adm');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return redirect()->back()->with('alert', 'Dados Incorretos!');
    }
}
