

        <div class='form-row'>
            <div class='col-md-4'>
   <label >Ean</label>
   <input type='text' name='ean' value='{{ $products->ean ?? old("ean")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Categorie_id</label>
   <input type='text' name='categorie_id' value='{{ $products->categorie_id ?? old("categorie_id")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Name</label>
   <input type='text' name='name' value='{{ $products->name ?? old("name")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Price</label>
   <input type='text' name='price' value='{{ $products->price ?? old("price")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Material_id</label>
   <input type='text' name='material_id' value='{{ $products->material_id ?? old("material_id")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Size</label>
   <input type='text' name='size' value='{{ $products->size ?? old("size")  }}' class='form-control'>
</div>
<div class='col-md-4'>
   <label >Quantity</label>
   <input type='text' name='quantity' value='{{ $products->quantity ?? old("quantity")  }}' class='form-control'>
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