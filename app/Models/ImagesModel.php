<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ImagesModel extends Model {  use HasFactory;

    protected $table = 'images';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    protected $fillable =[ 'product_id', 'name', 'cover',];
    protected $date =['created_at','updated_at'];

    public function scopeGetAll($query, $post) {
        if ($post->input('product_id') != '') {
            $query->where('product_id', 'LIKE', '%' . $post->input('product_id') . '%');
        }

        $dados =  $query
            ->orderBy('product_id')
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
            $result[$dado->id] = $dado->product_id;
        }

        return $result;
    }
}
