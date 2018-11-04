@extends('layouts.app')
@section('content')
        <h2>Crear nuevo producto:</h2>
@include('admin.messages')
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
            <input type="text" name="name" value="{{old('name')}}" required></label><br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{old('description')}}"><br>
            <label>Precio</label>
            <input type="text" name="price" value="{{old('price')}}" required><br>
            <label>Stock
            <input type="text" name="stock" value="{{old('stock')}}" required></label><br>
            <label>F. Venc.(opcional)
            <input type="date" name="expiration_date" value="{{old('expiration_date')}}"></label><br>
            <label>Seleccione una imagen<br>
            <input type="file" name="image" value="{{ old('image')}}">
            </label>
            <br>
            <input type="submit" >
        </form>
@endsection
