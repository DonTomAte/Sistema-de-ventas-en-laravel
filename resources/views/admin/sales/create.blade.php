@extends('layouts.app')
@section('content')
        <h2>Crear nuevo producto:</h2>
        <form method="POST" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br>
            <h2>Lista de productos a vender</h2>
            <div id="mensajes">
            </div>
            <table border="1">
                <th></th>
            </table>
            <input type="submit" name="" value="REGISTRAR VENTA">
        </form>
@endsection
