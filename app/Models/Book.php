<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Book extends Model {

	const UPLOAD_PATH = 'asset/img/';

	protected $table = 'books';

	protected $fillable = array('title','isbn','cover','price','author_id');

	public function Author(){
		return $this->belongsTo('App\Models\Author');
	}
}