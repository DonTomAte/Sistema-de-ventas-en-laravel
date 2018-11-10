@extends('layouts.app')
@section('content')
<center>
<h1>Productos</h1>
</center>
<div class="container">
    <table class="table">
        <TR>
            <th>Product_name</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>Hora</th>
        </TR>
         @foreach($listProducts as $product)
            <TR>
                <td> {{ $product->name }} </td>
                <td> {{ $product->pivot->quantity }} </td>
                <td> {{ $product->pivot->unit_price }} </td>
                <td> {{ substr($product->pivot->created_at,0,11 )}} </td>
                <td> {{ substr($product->pivot->created_at,11,20 )}} </td>
            </TR>
         @endforeach
    </table>
</div>
@endsection
