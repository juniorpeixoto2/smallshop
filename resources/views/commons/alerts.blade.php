@if ($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('alert'))
<div class="block-palette-ite block-palette-item-red-4 p-2 text-danger" style="border: 1px solid red; border-radius: 5px; padding: 10px; color: red; margin-bottom: 10px;">
    {{ session('alert') }}
</div>
@endif