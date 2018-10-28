<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
class DetailController extends Controller
{
    //crea un new product en la operacion $id
    public function store(Request $request, $id)
    {
        $operation = Operation::find($id);
        $operation->products()->attach($request->input('product_id'),['quantity'=>$request->input('quantity'),'unit_price'=>$request->input('unit_price')]);
        //return redirect('admin/sales/'.$operation->id.'/edit');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_prod)
    {
        $ope = Operation::find($id);
        $ope->products()->detach($id_prod);        
        return back();
    }
}

