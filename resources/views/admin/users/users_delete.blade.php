<?php echo view("{$template}/header", []); ?>

<div class='row'>
   <div class='col-md-6'>

       <h2><?php echo  ucfirst($titulo) ?></h2>
   </div><div class='col-md-6 text-right'>
   <a href='<?php echo url(/painel/'users'); ?>' class='btn btn-primary'>
      Voltar
  </a></div></div>


<div class='form-horizontal'>

    <form action='' method='post'>

        @csrf
        <div class='form-row'>
            <input type='hidden' name='delete' value='<?php echo $users->id ?>' class='form-control' required='true'>
        </div>
        <div class='form-row'>
            <div class='col-md-2'>
                <h4>Confirma a Exclusão</h4>
                <label>&nbsp;</label>
                <button type='submit' class='btn btn-primary form-control'>
                    Deletar
                </button>
                <br>
                <br>
                <a href='{{ url('users') }}'>
                    Voltar
                </a>
            </div>
        </div>
    </form>

</div>

