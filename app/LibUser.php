<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibUser extends Model
{
    protected $table = 'libro_user';
    
    protected $fillable = [
        'user_id',
        'libro_id'
    ];
}
