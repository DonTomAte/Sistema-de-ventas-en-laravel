
@extends('layouts.app')

@section('content')
<center>
    <a href="{{ url('/admin/providers/create') }}">Crear Proveedor</a>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Opciones</th>
            </tr>
            @foreach($providers as $provider)
                <tr>
                    <td>{{$provider->id}}</td>
                    <td>{{$provider->name}}</td>
                    <td>{{$provider->phone}}</td>
                    <td>{{$provider->address}}</td>
                    <td>
                        <!--<button type="button" title="ver">R</button>-->
                        <!--<button type="button" title="editar">U</button>-->
                        <a href="{{url('/admin/providers/'.$provider->id.'/edit')}}">Editar </a>
                        <!--<button type="button" title="eliminar">D</button>-->
                        <form method="POST" action="{{url('/admin/providers/'.$provider->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}

                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    {{ $providers->links() }}
</center>
@endsection