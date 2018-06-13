<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id)
	{
//            $test = DB::table('kategorie')->where('id',$id)->get();
//            foreach($test as $testy){
//            $title = $testy->nazwa;
//}
            $title = "Kategorie";
            return view('categories.categories', compact('id', 'title'));
	}
}
