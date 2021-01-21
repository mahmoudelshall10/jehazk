<?php

namespace App\Model;;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';

    protected $primaryKey = 'pk_id';


    protected $fillable = [
        'fk_parent_id', 'name', 'image','status','popular','star'
    ];



    public function parent()
    {
        return $this->belongsTo('App\Model\Category', 'fk_parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Model\Category', 'fk_parent_id');
    }



    public function product()
    {
        return $this->hasMany('App\Model\Product','fk_category_id');
    }




}
