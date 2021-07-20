

        <div class='form-row'>
            <div class='col-md-4'>
   <label >Product_id</label>
   <input type='text' name='product_id' value='{{ $images->product_id ?? old("product_id")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Name</label>
   <input type='text' name='name' value='{{ $images->name ?? old("name")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Cover</label>
   <input type='text' name='cover' value='{{ $images->cover ?? old("cover")  }}' class='form-control'>
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