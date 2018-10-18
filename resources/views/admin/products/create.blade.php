@extends('layouts.app')
@section('content')
        <h2>Crear nuevo producto:</h2>
        <form method="POST" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name"><br>
            <label>Descripcion</label>
            <input type="text" name="description"><br>
            <label>Precio</label>
            <input type="text" name="price"><br>
            <label>Stock</label><br>
            <input type="text" name="stock"><br>
            <label>Fecha de vencimiento</label><br>
            <input type="text" name="expiration_date"><br>
            <br>
            <label>Imagen</label><br>
            <input type="file" name="image"><br>
            <br>
            <label>Categoria (ID)</label><br>
            <input type="text" name="category_id" value="1"><br>
            <label>Proveedor (ID)</label><br>
            <input type="text" name="provider_id" value="1"><br>
            <input type="submit" name="">
        </form>
@endsection
