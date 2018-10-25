<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\Product;
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Operation::where("type","=","sale")->paginate(10);
        return view('admin.sales.index')->with(compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
       
        return view('admin.sales.create')->with(compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //store se encarga de crear una nueva venta
    public function store(Request $request)
    {
        $operation = new Operation();
        $operation->type = "sale";
        $operation->save();

        $productos = Product::all();
        return redirect('admin/sales/'.$operation->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operation = Operation::find($id);
        $productos = Product::all();
        return view('admin.sales.edit')->with(compact('operation','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //crea un new product
    public function update(Request $request, $id)
    {
        $operation = Operation::find($id);
        $operation->products()->attach($request->input('product_id'),['quantity'=>$request->input('quantity'),'unit_price'=>$request->input('unit_price')]);
        return redirect('admin/sales/'.$operation->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
