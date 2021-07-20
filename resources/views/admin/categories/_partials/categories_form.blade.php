

        <div class='form-row'>
            <div class='col-md-4'>
   <label >Name</label>
   <input type='text' name='name' value='{{ $categories->name ?? old("name")  }}' class='form-control'>
</div>

        </div>
        <div class='form-row'>
            <div class='col-md-2'>
                <label >&nbsp;</label>
                <button type='submit' class='btn btn-primary form-control'>
                    Salvar
                </button>
            </div>
        </div>