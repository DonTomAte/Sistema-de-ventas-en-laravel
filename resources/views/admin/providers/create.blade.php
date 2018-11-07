@extends('layouts.app')
@section('content')
        <h2>Crear nuevo proveedor:</h2>
@include('admin.messages')
        <form method="POST" action="{{ url('/admin/providers') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nombre del Proveedor
            <input type="text" name="name" value="{{old('name')}}" required>
            </label><br>
            <label>Telefono</label>
            <input type="text" name="phone" value="{{old('phone')}}"><br>
            <label>Direccion</label>
            <input type="text" name="address" value=" {{old('address')}}"><br>

            <input type="submit" value="Registrar2">
        </form>
@endsection