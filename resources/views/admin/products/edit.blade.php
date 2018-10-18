@extends('layouts.app')
@section('content')
        <h2>Edit</h2>

        <form method="POST" action="{{ url('/admin/products/'.$product->id.'/edit') }}">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name" value="{{ $product->name  }}"><br>
            <label>Descripcion</label>
            <input type="text" name="description" value="{{ $product->description  }}"><br>
            <label>Precio</label>
            <input type="text" name="price" value="{{ $product->price  }}"><br>
            <label>Stock</label><br>
            <input type="text" name="stock" value="{{ $product->stock  }}"><br>
            <label>Fecha de vencimiento</label><br>
            <input type="text" name="expiration_date" value="{{ $product->expiration_date  }}"><br>
            <label>Categoria (ID)</label><br>
            <input type="text" name="category_id" value="{{ $product->category_id  }}"><br>
            <label>Proveedor (ID)</label><br>
            <input type="text" name="provider_id" value="{{ $product->provider_id  }}"><br>
            <input type="submit" name="">

            <button>Guardar Cambios</button>
            <a href="{{ url('/admin/products')}}">Cancelar</a>
        </form>
@endsection
