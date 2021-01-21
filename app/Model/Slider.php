<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    
    protected $table = 'slider';

    protected $primaryKey = 'pk_id';

    protected $fillable = [
        'title1', 'title2', 'image','status',
    ];

}
