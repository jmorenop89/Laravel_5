<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $data = $request->all();
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function edit($id){
        $model = Product::find($id);
        if($model){
            return view('product.edit', compact('model'));
        }else{
            return abort(404); //page 404 - not found
        }
    }

    public function update(Request $request,$id){
        $data = $request->all();
        $model = Product::find($id);
        $model->fill($data);
        $model->save();
        return redirect()->route('product.index');
    }

    public function delete($id){
        $model = Product::find($id);
        if($model){
            $model->delete();
        }
        return redirect()->route('product.index');
    }
}
