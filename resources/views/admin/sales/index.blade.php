@extends('layouts.app')
@section('content')
<h1> Ventas</h1>
<a href="{{ url('admin/sales/store')}}">Registrar nueva venta</a>
    <table border="2">
        <tr>
            <th>operation_id</th>
            <th>tipo</th>
            <th>Detalles productos</th>
            <th>Opciones</th>
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
            <td>
                <a href="">eliminar</a><br>
                <a href="">editar</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $sales->links() }}
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
