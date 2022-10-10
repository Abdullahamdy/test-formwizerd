<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
    public function index()
    {
        return view('testProduct.createproduct');
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'amount' => 'required',

        ]);

        if (empty($request->session()->get('product'))) {
           
            $product = new Product();
            $product->fill($validatedData);
            $data =  $request->session()->put('product', $product);
        } else {
          
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $data =  $request->session()->put('product', $product);
            
        }
   
        $product = $request->session()->get('product');
      
        return view('testProduct.createproduct', compact('product'));
    }
}