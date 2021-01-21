<?php
namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable {
	use Notifiable;
	//
	protected $table = 'vendors';
	
	protected $fillable = [
		'username', 'email', 'password','firstname', 'lastname', 'phone','avatar','status',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password','remember_token',
	];

	public function product()
    {
        return $this->hasMany('App\Model\Product');
    }
  

}

