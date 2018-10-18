@extends('layouts.app')
@section('content')
    <center>
        <a href="{{ url('/admin/categories/create') }}">Crear Categoria</a>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->type}}</td>
                    <td>
                        <a href="{{url('/admin/categories/'.$category->id.'/edit')}}">Editar </a>
                        <form method="POST" action="{{url('/admin/categories/'.$category->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <!--
        {{ $categories->links() }}
        -->
        </center>
@endsection