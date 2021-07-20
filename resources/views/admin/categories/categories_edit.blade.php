@extends('admin.index_admin')
@section('title', 'Categories')

@section('actions')
   <a href='<?php echo url('/admin/categories'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


   
    <div class='col-md-12'>
        <div class='form-horizontal'>
        @include('commons/alerts')
        <form action="{{ route('categories.update',$categories->id) }}" method='post'>
            @csrf
            @method('PUT')

            @include('admin.categories._partials.categories_form')
        </form>

        </div>
    </div>
</div>
</div>
</div>
@endsection

