<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Show($id)
	{
		return view('categories.categories', ['id' => $id]);
	}
}
