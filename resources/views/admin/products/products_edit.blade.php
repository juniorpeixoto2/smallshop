@extends('admin.index_admin')
@section('title', 'Products')

@section('actions')
   <a href='<?php echo url('/admin/products'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


   
    <div class='col-md-12'>
        <div class='form-horizontal'>
        @include('commons/alerts')
        <form action="{{ route('products.update',$products->id) }}" method='post'>
            @csrf
            @method('PUT')

            @include('admin.products._partials.products_form')
        </form>

        </div>
    </div>
</div>
</div>
</div>
@endsection

