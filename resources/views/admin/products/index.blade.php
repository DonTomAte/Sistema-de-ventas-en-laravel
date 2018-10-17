<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        <a href="{{ url('/admin/products/create') }}">Crear Producto</a>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <!--<button type="button" title="ver">R</button>-->
                        <!--<button type="button" title="editar">U</button>-->
                        <a href="{{url('/admin/products/'.$product->id.'/edit')}}">Editar </a>
                        <!--<button type="button" title="eliminar">D</button>-->
                        <form method="POST" action="{{url('/admin/products/'.$product->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $products->links() }}
        </center>
        
    </body>
</html>
    