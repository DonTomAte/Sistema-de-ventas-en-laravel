@extends('layouts.app')
@section('content')
<h1> Ventas</h1>
<form method="POST" action="{{ url('admin/sales/store')}}">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
    <input class="btn btn-primary" type="submit" value="Registrar nueva venta yeah">
</form>
<br>
    @if( $sales->count() === 0)
        <br>
        <br>
        <h3>No hay ventas</h3>
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
            @foreach($sales as $sale)
            <tr>
                <td> {{ $sale->id }} </td>
                <td> {{ $sale->type }} </td>
                <td>
                    @if($sale->products->count() === 0)
                        <center><h4>No hay productos en esta factura</h4></center>                      
                    @else
                    @endif
                </td>
                <td>
                     <form action="{{ url('details/'.$sale->id.'/list') }}">
                            <button class="btn btn-primary">Ver Detalles</button>
                        </form>
                    <form method="post" action="{{ url('/admin/sales/'.$sale->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro que quiere eliminar esta factura?')">Eliminar Factura</button>
                    </form>
                    <a class="btn btn-secondary" href="{{ url( 'admin/sales/'. $sale->id .'/edit' )}}" type="button">editar</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $sales->links() }}
    </div>
    @endif
@endsection
