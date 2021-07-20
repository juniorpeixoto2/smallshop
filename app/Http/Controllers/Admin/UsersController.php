<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {


    private $dados;

    public function __construct() {
        $this->dados['template'] = 'painel';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $name_post = $request->input('name');
        $users = usersModel::getAll($request);

        $this->dados['name_post'] = $name_post;
        $this->dados['users'] = $users;
        $this->dados['titulo'] = 'users';
        return view('admin.users.users_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:App\Models\UsersModel,email',
            ]);

            $inserir = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            usersModel::insert($inserir);
            return redirect('/painel/users');
        } else {
            $this->dados['titulo'] = 'users';
            return view('dashboard.users.users_create', $this->dados);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{users}Model  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, usersModel $users, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);

            $update = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];

            usersModel::where('id', $id)->update($update);
            return redirect('/painel/users');
        } else {
            $users = usersModel::where('id', $id)->first();
            $this->dados['users'] = $users;
            $this->dados['titulo'] = 'users';
            return view('dashboard.users.users_create', $this->dados);
        }
    }

    public function delete(Request $request, usersModel $users, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            usersModel::where('id', $id)->delete();
            return redirect('/painel/users');
        } else {
            $users = usersModel::where('id', $id)->first();
            $this->dados['users'] = $users;
            $this->dados['titulo'] = 'users';
            return view('/painel/users.users_delete', $this->dados);
        }
    }
}
