@extends('layouts.app')
@section('content')
        <h2>Edit</h2>
@include('messages')
        <form method="POST" action="{{ url('/admin/categories/'.$category->id.'/edit') }}">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name" value="{{ $category->name  }}"><br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{ $category->description  }}"><br>
            <label>Tipo</label>
            <select name="type">
                <option >
                    {{ $category->type  }}
                </option>
                <option >
                    General
                </option>
                <option>
                    Venta Rapida
                </option>
                <option >
                    Recargas
                </option>
            </select>

            <input type="submit" name="">
            <a href="{{ url('/admin/categories')}}">Cancelar</a>
        </form>
@endsection