@extends('admin.index_admin')
@section('title', 'products')

@section('actions')
   <a href='<?php echo url('/admin/products'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>



        <div class='form-row'>
            <div class='col-md-4'>
   <label >Ean</label>
   <input type='text' readonly value='{{ $products->ean }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Categorie_id</label>
   <input type='text' readonly value='{{ $products->categorie_id }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Name</label>
   <input type='text' readonly value='{{ $products->name }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Price</label>
   <input type='text' readonly value='{{ $products->price }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Material_id</label>
   <input type='text' readonly value='{{ $products->material_id }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Size</label>
   <input type='text' readonly value='{{ $products->size }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Quantity</label>
   <input type='text' readonly value='{{ $products->quantity }}' class='form-control'>
</div>

        </div>
        <div class='form-row'>
            <div class='col-md-2'>
                <label >Excluir?</label>
                <button type='submit' class='btn btn-primary form-control'>
                    Excluir
                </button>
            </div>
        </div>
        
               </div>
    </div>
</div>
</div>
</div>
@endsection
        