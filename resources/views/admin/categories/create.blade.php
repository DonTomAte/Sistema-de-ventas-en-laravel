@extends('layouts.app')
@section('content')
        <h2>Crear nueva categoria:</h2>
@include('admin.messages')
        <form method="POST" action="{{ url('/admin/categories') }}">
            {{ csrf_field() }}

            <label>Nombre de la Categoria
            <input type="text" name="name" required>
            </label><br>
            <label>Descripcion de la Categoria
            <input type="text" name="description" required>
            </label><br>
            <label>Tipo de categoria
                <select name="type">
                    <option value="General">
                        General
                    </option>
                    <option>
                        Venta rapida
                    </option>
                </select>
            </label>
            <input type="submit" name="">
        </form>
@endsection