@extends('admin.index_admin')
@section('title', 'Materials')

@section('actions')
<a href='<?php echo url('admin/materials/create') ?>' class='btn btn-primary'>
Cadastrar
</a>
@endsection

@section('content')

<div class='card'>
<div class='card-body'>

<div class='row'><div class='col-md-12'> 
            <form action="{{ route('materials.search') }}" method='post'>
                @csrf
                <div class='form-row'>
                    <div class='col-md-2'>
                        <label>name</label>
                        <input type='text' name='name' value="{{ $filters['name'] ?? '' }}" class='form-control'>
                    </div>
                    <div class='col-md-2'>
                        <label>&nbsp;</label>
                        <input type='submit' value='Pesquisar' class='form-control btn btn-primary'>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>

    <table class='table table-bordered table-hover'>
        <thead>
            <tr>
               <th>Name</th> <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($materials as $key => $dado) {
            ?>
                <tr>
                     <td><?php echo $dado->name; ?></td>
                    <td>
                        <a href='<?php echo url('admin/materials/' . $dado->id.'/edit') ?>' class='btn btn-primary btn-xs'>
                            <span class='fa fa-edit'></span>
                        </a>
                        <a href='<?php echo url('admin/materials/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                            <span class='fa fa-trash'></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    {{ $materials->links() }}
</div>
</div>
</div>

@endsection