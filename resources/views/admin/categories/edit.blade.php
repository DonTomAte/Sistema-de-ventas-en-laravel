@extends('layouts.app')
@section('content')
        <h2>Edit</h2>

        <form method="POST" action="{{ url('/admin/categories/'.$category->id.'/edit') }}">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name" value="{{ $category->name  }}"><br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{ $category->description  }}"><br>
            <label>Tipo</label>
            <input type="text" name="type" value="{{ $category->type  }}"><br>
            <input type="submit" name="">
            <a href="{{ url('/admin/categories')}}">Cancelar</a>
        </form>
@endsection