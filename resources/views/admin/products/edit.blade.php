@extends('layouts.app')
@section('content')
        <h2>Edit</h2>

@include('messages')
        <form method="POST" action="{{ url('/admin/products/'.$product->id.'/edit') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name" value="{{ $product->name  }}" required><br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{ $product->description  }}"><br>
            <label>Precio</label>
            <input type="text" name="price" value="{{ $product->price  }}" required><br>
            <label>Stock</label><br>
            <input type="text" name="stock" value="{{ $product->stock  }}" required><br>
            <label>Fecha de vencimiento (Opcional)</label><br>
            <input type="date" name="expiration_date" value="{{ $product->expiration_date  }}"><br>
            <label>
                Elija la categoria
                <select name="category_id" >
                    <option value="{{ $product->category_id }}">
                        {{ $product->category->name}}
                    </option>
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
                    <option value="{{ $product->provider_id}}">
                        {{ $product->provider->name}}
                    </option>
                    @foreach($providers as $provider)
                    <option value="{{ $provider->id}}">
                        {{ $provider->name }}
                    </option>
                    @endforeach
                </select>
            </label>


            <img src="/images/products/{{ $product->image }}" width="250"><br>
            <label>Seleccione una imagen<br>
            <input type="file" name="image" value="{{ old('image')}}">
            </label>
            <br>
            <input type="submit" name="" value="Guardar Cambios">
            <a href="{{ url('/admin/products')}}">Cancelar</a>
        </form>
@endsection
