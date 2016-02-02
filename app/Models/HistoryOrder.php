<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class HistoryOrder extends Model {

	protected $table = 'history_order';

	protected $fillable = array('member_id','address','total');

	public function orderItems(){
        return $this->belongsToMany('App\Models\Book')->withPivot('amount','total');
    }

    public function User(){
		return $this->belongsTo('App\Models\User', 'member_id');
	}
}