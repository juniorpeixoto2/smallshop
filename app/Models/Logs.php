<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model {
    use HasFactory;

    protected $table = 'logs';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'model', 'action', 'message', 'models'];
    protected $date = ['created_at', 'updated_at'];
}
