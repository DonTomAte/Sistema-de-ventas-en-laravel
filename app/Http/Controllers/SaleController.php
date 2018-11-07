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
        $sales = Operation::where("type","=","sale")->paginate(5);
        return view('admin.sales.index')->with(compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //no necesitamos de esta funcion, se va a  store directamente
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
        $operation->user_id = auth()->user()->id;
        $operation->save();

        $productos = Product::all();
        return redirect('admin/sales/'.$operation->id.'/edit');
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
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Operation::find($id);
        foreach($sale->products as $product){
            $prod_id=$product->id;
            $sale->products()->detach($prod_id);
        }
        $sale->delete();
        return redirect('admin/sales');
    }
}