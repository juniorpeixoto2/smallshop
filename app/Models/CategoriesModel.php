<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Observable;

class CategoriesModel extends Model {
    use HasFactory;

    use Observable;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = ['name',];
    protected $date = ['created_at', 'updated_at'];

    public function scopeGetAll($query, $post) {
        if ($post->input('name') != '') {
            $query->where('name', 'LIKE', '%' . $post->input('name') . '%');
        }

        $dados =  $query
            ->orderBy('name')
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
            $result[$dado->id] = $dado->name;
        }

        return $result;
    }
}
