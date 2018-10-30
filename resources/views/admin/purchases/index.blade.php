@extends('layouts.app')
@section('content')
<h1> Compras</h1>
<form method="POST" action="{{ url('admin/purchases/store')}}">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
    <input class="btn btn-primary" type="submit" value="Registrar una compra">
</form>
<br>
    @if( $purchases->count() === 0)
        <br>
        <br>
        <h3>No hay compras</h3>
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
            @foreach($purchases as $purchase)
            <tr>
                <td> {{ $purchase->id }} </td>
                <td> {{ $purchase->type }} </td>
                <td>
                    @if($purchase->products->count() === 0)
                    <center><h4>No hay productos en esta factura</h4></center>                      
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
                             @foreach($purchase->products as $product)
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
                    <form method="post" action="{{ url('/admin/purchases/'.$purchase->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro que quiere eliminar esta factura?')">Eliminar Factura</button>
                    </form>
                    <a class="btn btn-secondary" href="{{ url( 'admin/purchases/'. $purchase->id .'/edit' )}}" type="button">editar</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $purchases->links() }}
    </div>
    @endif
@endsection
