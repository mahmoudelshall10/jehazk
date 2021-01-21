<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    protected $primaryKey = 'pk_id';


    protected $fillable = [
        'image', 'status'
    ];

}
