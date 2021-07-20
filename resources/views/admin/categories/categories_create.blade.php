@extends('admin.index_admin')
@section('title', 'Categories')

@section('actions')
   <a href='<?php echo url('/admin/categories'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


<div class='row'>
    <div class='col-md-12'>
        <div class='form-horizontal'>
            @include('commons/alerts')
            <form action='{{ route('categories.store') }}' method='post'>
                @csrf
                @include('admin.categories._partials.categories_form')
            </form>
        </div>
    </div>
</div>
@endsection

