@extends('layouts.app')
@section('content')
        <h2>Crear nuevo producto:</h2>
        <form method="POST" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>
                Elija la categoria
                <select name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id}}">
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </label>
<br>
            <label>
                Elija al Proveedor
                <select name="provider_id">
                    @foreach($providers as $provider)
                    <option value="{{ $provider->id}}">
                        {{ $provider->name }}
                    </option>
                    @endforeach
                </select>
            </label>
            <br>
            <label>Nombre del Producto
            <input type="text" name="name"></label><br>
            <label>Descripcion</label>
            <input type="text" name="description"><br>
            <label>Precio</label>
            <input type="text" name="price"><br>
            <label>Stock
            <input type="text" name="stock"></label><br>
            <label>F. Venc.
            <input type="text" name="expiration_date"></label><br>
            <label>Seleccione una imagen<br>
            <input type="file" name="image" value="Seleccione una imagen">
            </label>
            <br>
            <input type="submit" name="">
        </form>
@endsection
