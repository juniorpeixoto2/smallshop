@extends('admin.index_admin')
@section('title', 'Images')

@section('actions')
<a href='<?php echo url('admin/images/create') ?>' class='btn btn-primary'>
Cadastrar
</a>
@endsection

@section('content')

<div class='card'>
<div class='card-body'>

<div class='row'><div class='col-md-12'> 
            <form action="{{ route('images.search') }}" method='post'>
                @csrf
                <div class='form-row'>
                    <div class='col-md-2'>
                        <label>product_id</label>
                        <input type='text' name='product_id' value="{{ $filters['product_id'] ?? '' }}" class='form-control'>
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
               <th>Product_id</th> <th>Name</th> <th>Cover</th> <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($images as $key => $dado) {
            ?>
                <tr>
                     <td><?php echo $dado->product_id; ?></td> <td><?php echo $dado->name; ?></td> <td><?php echo $dado->cover; ?></td>
                    <td>
                        <a href='<?php echo url('admin/images/' . $dado->id.'/edit') ?>' class='btn btn-primary btn-xs'>
                            <span class='fa fa-edit'></span>
                        </a>
                        <a href='<?php echo url('admin/images/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                            <span class='fa fa-trash'></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    {{ $images->links() }}
</div>
</div>
</div>

@endsection