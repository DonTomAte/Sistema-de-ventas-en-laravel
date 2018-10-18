@extends('layouts.app')
@section('content')
        <h2>Crear nueva categoria:</h2>
        <form method="POST" action="{{ url('/admin/categories') }}">
            {{ csrf_field() }}

            <label>Nombre de la Categoria
            <input type="text" name="name">
            </label><br>
            <label>Descripcion de la Categoria
            <input type="text" name="description">
            </label><br>
            <label>Tipo de categoria
            <input type="text" name="type">
            <input type="submit" name="">
        </form>
@endsection