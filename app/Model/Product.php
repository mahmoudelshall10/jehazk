<?php

namespace App\Model;;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'pk_id';

    protected $fillable = [
        'order', 'fk_category_id', 'fk_manufacture_id','fk_user_id','fk_vendor_id','name','price','old_price','description','offer','image','featured','saleoff','hotdeal','status','bestseller'
    ];

    public function manufacture()
    {
        return $this->belongsTo('App\Model\Manufacture','fk_manufacture_id', 'pk_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\Model\Category','Category_Product','fk_product_id','fk_category_id');
    }



    public function user()
    {
        return $this->belongsTo('App\User','fk_user_id','id');
    }

     public function vendor()
    {
        return $this->belongsTo('App\Model\User','fk_vendor_id','id');
    }


     



}
