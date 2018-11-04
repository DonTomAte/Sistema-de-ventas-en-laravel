
@extends('layouts.app')

@section('content')
<center>
        <a href="{{ url('/admin/products/create') }}">Crear Producto</a>
        <div class="container">
            <table class="table">
              <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>img</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                    <th>Opciones</th> 
                </tr>
              </thead>
              <tbody>
                 @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>

                    <td>
                        @if(substr($product->image,0,4)    === 'http')
                            <img src="{{ $product->image }}" alt="IMG" width="50">
                        @else
                            <img src="/images/products/{{ $product->image }}" alt="Aqui hay una imagen" width="50">
                        @endif
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->provider->name}}</td>
                    <td>
                        <a href="{{url('/admin/products/'.$product->id.'/edit')}}">Editar </a>
                        <form method="POST" action="{{url('/admin/products/'.$product->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                    </tr>
                  </tbody>
                      @endforeach
                </table>
            {{ $products->links() }}
            </div>
        </center>
@endsection


    