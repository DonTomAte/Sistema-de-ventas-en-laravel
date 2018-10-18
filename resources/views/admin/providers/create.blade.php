@extends('layouts.app')
@section('content')
        <h2>Crear nuevo proveedor:</h2>
        <form method="POST" action="{{ url('/admin/providers') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nombre del Proveedor</label>
            <input type="text" name="name"><br>
            <label>Telefono</label>
            <input type="text" name="phone"><br>
            <label>Direccion</label>
            <input type="text" name="address"><br>

            <input type="submit" name="">
        </form>
@endsection