<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $primaryKey = 'pk_id';


    protected $fillable = [
        'image', 'title', 'description',
    ];
}
// ' created_at'