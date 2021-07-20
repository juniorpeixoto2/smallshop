@extends('dashboard.index_admin')
@section('title', $titulo)

@section('botao')
<a href='<?php echo url('/painel/users'); ?>' class='btn btn-primary'>
    Voltar
</a>@endsection

@section('content')

<div class='card'>
    <div class='card-body'>


        <div class='row'>
            <div class='col-md-12'>
                <div class='form-horizontal'>

                    <form action='' method='post'>

                        @if ($errors->any())
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @csrf
                        <div class='form-row'>
                            <div class='col-md-3'>
                                <label>Nome</label>
                                <input type='text' name='name' required value='<?php echo isset($users) ? $users->name : old('name') ?>' class='form-control'>
                            </div>
                            <div class='col-md-3'>
                                <label>E-mail</label>
                                <input type='email' name='email' required value='<?php echo isset($users) ? $users->email : old('email') ?>' class='form-control'>
                            </div>
                            <div class='col-md-3'>
                                <label>Senha</label>
                                <input type='password' name='password' required value='<?php echo isset($users) ? $users->email : old('password') ?>' class='form-control'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-2'>
                                <label>&nbsp;</label>
                                <button type='submit' class='btn btn-primary form-control'>
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection