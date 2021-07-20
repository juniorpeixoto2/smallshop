@extends('admin.index_admin')
@section('title', 'images')

@section('actions')
   <a href='<?php echo url('/admin/images'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>



        <div class='form-row'>
            <div class='col-md-4'>
   <label >Product_id</label>
   <input type='text' readonly value='{{ $images->product_id }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Name</label>
   <input type='text' readonly value='{{ $images->name }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Cover</label>
   <input type='text' readonly value='{{ $images->cover }}' class='form-control'>
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
        