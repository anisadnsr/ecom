<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Book extends Model {

	protected $table = 'books';

	protected $fillable = array('title','isbn','cover','price','author_id');

	public function Author(){
		return $this->belongTo('Author');
	}

}