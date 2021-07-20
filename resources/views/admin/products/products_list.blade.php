@extends('admin.index_admin')
@section('title', 'Products')

@section('actions')
<a href='<?php echo url('admin/products/create') ?>' class='btn btn-primary'>
Cadastrar
</a>
@endsection

@section('content')

<div class='card'>
<div class='card-body'>

<div class='row'><div class='col-md-12'> 
            <form action="{{ route('products.search') }}" method='post'>
                @csrf
                <div class='form-row'>
                    <div class='col-md-2'>
                        <label>ean</label>
                        <input type='text' name='ean' value="{{ $filters['ean'] ?? '' }}" class='form-control'>
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
               <th>Ean</th> <th>Categorie_id</th> <th>Name</th> <th>Price</th> <th>Material_id</th> <th>Size</th> <th>Quantity</th> <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $key => $dado) {
            ?>
                <tr>
                     <td><?php echo $dado->ean; ?></td> <td><?php echo $dado->categorie_id; ?></td> <td><?php echo $dado->name; ?></td> <td><?php echo $dado->price; ?></td> <td><?php echo $dado->material_id; ?></td> <td><?php echo $dado->size; ?></td> <td><?php echo $dado->quantity; ?></td>
                    <td>
                        <a href='<?php echo url('admin/products/' . $dado->id.'/edit') ?>' class='btn btn-primary btn-xs'>
                            <span class='fa fa-edit'></span>
                        </a>
                        <a href='<?php echo url('admin/products/' . $dado->id) ?>' class='btn btn-danger btn-xs'>
                            <span class='fa fa-trash'></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    {{ $products->links() }}
</div>
</div>
</div>

@endsection