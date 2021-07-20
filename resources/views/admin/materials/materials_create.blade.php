@extends('admin.index_admin')
@section('title', 'Materials')

@section('actions')
   <a href='<?php echo url('/admin/materials'); ?>' class='btn btn-primary'>
      Voltar
  </a>@endsection

@section('content')

<div class='card'>
<div class='card-body'>


<div class='row'>
    <div class='col-md-12'>
        <div class='form-horizontal'>
            @include('commons/alerts')
            <form action='{{ route('materials.store') }}' method='post'>
                @csrf
                @include('admin.materials._partials.materials_form')
            </form>
        </div>
    </div>
</div>
@endsection

