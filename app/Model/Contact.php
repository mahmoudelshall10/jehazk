<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'pk_id';
    protected $fillable = [
        'name', 'email', 'phone', 'message',
    ];

}
