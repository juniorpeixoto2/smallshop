<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rifa_comprasModel;
use Illuminate\Http\Request;

class AdminController extends Controller {

    private $dados;

    public function index(Request $request) {
        $this->dados['titulo'] = '';
        return view('admin.home_admin', $this->dados);
    }

    public function sair(Request $request) {
        $request->session()->flush();
        return Redirect('/');
    }
}
