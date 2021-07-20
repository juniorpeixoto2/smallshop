@extends('admin.index_admin')
@section('title', 'Usuários')
@section('menu_users','active')

@section('botao')
<a href='<?php echo url('painel/users/create') ?>' class='btn btn-primary'>
    Cadastrar
</a>
@endsection

@section('actions')
<a href="{{ url('painel/users/create') }}" class="btn btn-primary">
    Cadastrar
</a>
@endsection

@section('content')

<div class='card'>
    <div class='card-body'>

        <table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $key => $dado) {
                ?>
                    <tr>
                        <td><?php echo $dado->name; ?></td>
                        <td><?php echo $dado->email; ?></td>
                        <td>
                            <a href='<?php echo url('/painel/users/edit/' . $dado->id) ?>' class='btn btn-primary btn-xs'>
                                <span class='fa fa-edit'></span>
                            </a>
                            <a href='<?php echo url('/painel/users/delete/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                                <span class='fa fa-trash'></span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        {{ $users->links() }}
    </div>

    @endsection