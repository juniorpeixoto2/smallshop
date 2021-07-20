@extends('admin.index_admin')
@section('title', 'Images')

@section('actions')
   <a href='<?php echo url('/admin/images'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


   
    <div class='col-md-12'>
        <div class='form-horizontal'>
        @include('commons/alerts')
        <form action="{{ route('images.update',$images->id) }}" method='post'>
            @csrf
            @method('PUT')

            @include('admin.images._partials.images_form')
        </form>

        </div>
    </div>
</div>
</div>
</div>
@endsection

