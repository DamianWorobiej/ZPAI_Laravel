<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Category;

use DB;
use App\Quotation;

class CRUDController extends Controller
{
    //
    
    public function index()
    {
        if (Auth::check())
        {
//            $title = "CRUD";
//            return view('crud.index', compact('title'));
            $title = "CRUD LEPSZE";
            $products = \App\Product::all();
            return view('crud.index', compact('products','title'));
        }
        else
        {
            $errorMSG = "Strona niedostępna dla niezalogowanych";
            $title = "Błąd";
            return view('errorPage', compact('title', 'errorMSG'));
        }
    }
    
    public function show($id)
    {
        $product = \App\Product::find($id);
        $title = "SHOW";
        return view('crud.show', compact('title','product'));
    }
    
    public function store(CreateProductRequest $request)
    {
        Product::create($request->all());
        return redirect('/crud');
    }
    
    public function create()
    {
        $title = "Tworzenie";
        $categories = Category::pluck('nazwa','id');
        return view('crud.create', compact('title','categories'));
    }
    
//    public function edit(Product $product)
//    {
//        return $product->id;
//        $title = "Edycja";
//        $categories = Category::pluck('nazwa','id');
//        return view('crud.edit', compact('product','title','categories'));
//        
//        
//    }
    
    public function edit($id)
    {
        
        $products = DB::table('products')->where('id',$id)->get();
        foreach($products as $placeholder){
            $product = new Product;
            $product = $placeholder;
            echo $product->id;
        }
//        
//        return $product->nazwa;
        $categories = Category::pluck('nazwa','id');
        return view('crud.edit', compact('products','title','categories'));
    }
    
    public function destroy(Product $product)
    {
        return $product;
        $product->delete();
        return redirect()->route('crud.index');
    }
//    Product $product
    public function update(CreateProductRequest $request, $id)
    {
                $product = DB::table('products')->where('id',$id)->get();

        $product->update($request->all());
        return redirect()->route('crud.index');
    }
}
