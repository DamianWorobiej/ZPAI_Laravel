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
        
        public function getkategoria_idAttribute()
        {
            return $this->categories->pluck('id');
        }
        
        public function __toString(){
            return "[{\"id\":".$this->id.",\"kategoria_id\":".$this->kategoria_id;
        }
}
