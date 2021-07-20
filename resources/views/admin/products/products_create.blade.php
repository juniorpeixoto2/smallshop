@extends('admin.index_admin')
@section('title', 'Products')

@section('actions')
   <a href='<?php echo url('/admin/products'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


<div class='row'>
    <div class='col-md-12'>
        <div class='form-horizontal'>
            @include('commons/alerts')
            <form action='{{ route('products.store') }}' method='post'>
                @csrf
                @include('admin.products._partials.products_form')
            </form>
        </div>
    </div>
</div>
@endsection

