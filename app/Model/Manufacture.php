<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $table = 'manufacture';

    protected $primaryKey = 'pk_id';

    protected $fillable = [
        'name','status',
    ];

    public function product()
    {
        return $this->hasMany('App\Model\Product','fk_manufacture_id');
    }

}
