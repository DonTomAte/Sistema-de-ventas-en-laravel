@extends('layouts.app')
@section('content')
<h1> Ventas</h1>
<form method="POST" action="{{ url('customer/orders/store')}}">
    {{ csrf_field() }}
    <input class="btn btn-primary" type="submit" value="Registrar nuevo Pedido">
</form>

    @if( $orders->count() === 0)
        <br>
        <br>
        <h3>No hay pedidos</h3>
        <h2>{{ $orders->count() }} Pedidos</h2>
    @else
    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>operation_id</th>
                    <th>tipo</th>
                    <th><center>Detalles productos</center></th>
                    <th>Opciones</th>
                </tr>
            </thead>
            @foreach($orders as $order)
            <tr>
                <td> {{ $order->id }} </td>
                <td> {{ $order->type }} </td>
                <td>
                    @if($order->products->count() === 0)
                    <center><h4>No hay productos en este carrito</h4></center>                      
                    @else
                    <center>
                        <table >
                            <TR>
                                <th>Product_name</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                            </TR>
                             @foreach($order->products as $product)
                                <TR>
                                    <td> {{ $product->name }} </td>
                                    <td> {{ $product->pivot->quantity }} </td>
                                    <td> {{ $product->pivot->unit_price }} </td>
                                    <td> {{ substr($product->pivot->created_at,0,11 )}} </td>
                                    <td> {{ substr($product->pivot->created_at,11,20 )}} </td>
                                </TR>
                             @endforeach
                        </table>
                    </center>
                    @endif
                </td>
                <td>
                    <form method="post" action="{{ url('/customer/orders/'.$order->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro que quiere eliminar esta factura?')">Eliminar Pedido</button>
                    </form>
                    <a class="btn btn-secondary" href="{{ url( 'customer/orders/'. $order->id .'/edit' )}}" type="button">editar</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $orders->links() }}
    </div>
    @endif
@endsection
