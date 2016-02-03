<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Order extends Model {

	protected $table = 'orders';

	protected $fillable = array('member_id','address','total');

	public function orderItems(){
        return $this->belongsToMany('App\Models\Book')->withPivot('id','amount','total');
    }

    public function bookOrder(){
    	return $this->belongsTO('App\Models\BookOrder', 'id', 'order_id');
    }

    public function User(){
		return $this->belongsTo('App\Models\User', 'member_id');
	}

}