<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	protected $fillable = [
	'kategoria_id',
	'nazwa',
	'opis',
	'img',
	'img_thumb',
	'img_opis'
	];
}
