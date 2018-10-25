@extends('layouts.app')
@section('content')
        <h2>Agregar Producto</h2>

                
                    <form method="POST" action="">
                    {{ csrf_field() }}
                    <label>
                        Producto:
                    <select id="producto" name="product_id">
                        @foreach($productos as $product)
                        <option value="{{ $product->id}}">
                            {{ $product->name }}
                        </option>
                        @endforeach
                    </select>
                    </label>
                    <label>
                    Cantidad
                    <input type="text" name="quantity">
                    </label>
                    <label>
                    Precio Unitario
                    <input type="text" name="unit_price">
                    </label>
                   <button type="submit">Agregar</button>
                </form>
            <table border="1">
                <tr>
                    <td>nombre</td>
                    <td>cantidad</td>
                    <td>precio unit</td>
                    <td>fecha</td>
                </tr>
                     @foreach($operation->products as $product)
                        <TR>
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->pivot->quantity }} </td>
                            <td> {{ $product->pivot->unit_price }} </td>
                            <td> {{ $product->pivot->created_at }} </td>
                        </TR>
                     @endforeach

            </table>
@endsection
