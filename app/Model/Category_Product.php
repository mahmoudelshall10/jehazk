<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category_Product extends Model
{
    
     protected $table = 'category_product';

    protected $primaryKey = 'pk_id';

    protected $fillable = [
        'fk_category_id', 'fk_manufacture_id'
    ];
    

    public function category()
    {
        return $this->belongsTo('App\Model\Category','fk_category_id');
    }

     public function product()
    {
        return $this->belongsTo('App\Model\Product','fk_product_id');
    }

}
