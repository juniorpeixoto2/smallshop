<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Observable;

class ProductsModel extends Model {
    use HasFactory;


    protected $table = 'products';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    protected $fillable = ['ean', 'categorie_id', 'name', 'price', 'material_id', 'size', 'quantity',];
    protected $date = ['created_at', 'updated_at'];

    public function scopeGetAll($query, $post) {
        if ($post->input('ean') != '') {
            $query->where('ean', 'LIKE', '%' . $post->input('ean') . '%');
        }

        $dados =  $query
            ->orderBy('ean')
            ->paginate(10);
        return $dados;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return []
     */
    public function scopeGetArray($query) {
        $dados =  $query->get();

        $result = [];
        $result[''] = 'Selecione!';
        foreach ($dados as $dado) {
            $result[$dado->id] = $dado->ean;
        }

        return $result;
    }

    public function images() {
        return $this->hasMany(ImagesModel::class,  'product_id', 'id');
    }
}
