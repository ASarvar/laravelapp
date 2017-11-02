<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $fillable = [

		'book_id',
		'book_author',
		'book_name',
		'book_published_at',
	];

 	public function user(){

		return $this->belongsTo('App\User');

	}
}
