@extends('layouts.app')
@section('content')
        <h2>Edit</h2>
@include('admin.messages')
        <form method="POST" action="{{ url('/admin/providers/'.$provider->id.'/edit') }}">
            {{ csrf_field() }}
            <label>Nombre del Proveedor</label>
            <input type="text" name="name" value="{{$provider->name}}" required><br>
            <label>Telefono/Celular</label>
            <input type="text" name="phone" value="{{ $provider->phone  }}"><br>
            <label>Direccion</label>
            <input type="text" name="address" value="{{ $provider->address  }}"><br>
            <input type="submit" name="">

            <a href="{{ url('/admin/providers')}}">Cancelar</a>
        </form>
@endsection