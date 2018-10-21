<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Provider;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view('admin.products.index')->with(compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $providers = Provider::all();
        return view('admin.products.create')->with(compact('categories','providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->expiration_date = $request->input('expiration_date');
        //para guardar la imagen:
        $file = $request->file('image');
        $path = public_path().'/images/products';
        $fileName = uniqid().$file->getClientOriginalName();
        $file->move($path,$fileName);
        $product->image = $fileName;
        $product->category_id = $request->input('category_id');
        $product->provider_id = $request->input('provider_id');
        
        $product->save();

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->expiration_date = $request->input('expiration_date');
        $product->category_id = $request->input('category_id');
        $product->provider_id = $request->input('provider_id');
        $product->image = "es_una_imagen";
        $product->save();
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //Eliminar imagenes
        if (substr($product->image,0,4) !== 'http') {
            $fullPath =public_path().'/images/products/'.$product->image;
            $deleted = File::delete($fullPath);
            if ($deleted) {
                $product->delete();
            }
        }
        else
        {
            $product->delete();
        }
        return back();
    }
}
