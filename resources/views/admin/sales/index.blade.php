@extends('layouts.app')
@section('content')
<h1> Ventas</h1>
    <table border="2">
        <tr>
            <th>operation_id</th>
            <th>tipo</th>
            <th>Detalles</th>
        </tr>
        @foreach($sales as $sale)
        <tr>
            <td> {{ $sale->id }} </td>
            <td> {{ $sale->type }} </td>
            <td>
                <table border="1">
                    <TR>
                        <!--
                        <th>Id_producto</th>
                        -->
                        <th>Product_name</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Fecha de emision</th>
                    </TR>
                     @foreach($sale->products as $product)
                        <TR>
                            <!--
                            <td> {{ $product->id }} </td>
                            -->
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->pivot->quantity }} </td>
                            <td> {{ $product->pivot->unit_price }} </td>
                            <td> {{ $product->pivot->created_at }} </td>
                        </TR>
                     @endforeach
                </table>
            </td>
        </tr>
        @endforeach
    </table>
    <!--

            $table->increments('id');
            $table->integer('operation_id')->unsigned();
            $table->foreign('operation_id')->references('id')->on('operations');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->float('unit_price');
    -->
@endsection
