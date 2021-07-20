<?php

namespace App\Models;





use App\Utils\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model {
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

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
