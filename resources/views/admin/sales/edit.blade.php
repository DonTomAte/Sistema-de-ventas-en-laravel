@extends('layouts.app')
@section('content')
<h2>Agregar Producto</h2> 
@include('admin.messages')
  <!-- Aqui enviamos al mismo link pero por el verbo POST -->
  <form method="POST" action=" {{ url('/admin/details/'.$operation->id.'/edit') }} ">
    {{ csrf_field() }}
    <label>
      Producto:
      <select id="producto" name="product_id">
      @foreach($productos as $product)
        <option value="{{ $product->id}}">
          {{ $product->name }}
        </option>
      @endforeach
      </select>
    </label>
    <label>
      Cantidad
      <input type="text" name="quantity" value="{{old('quantity')}}" required>
    </label>
    <label>
      Precio Unitario
      <input type="text" name="unit_price" value="{{old('unit_price')}}" required autofocus>
    </label>
   <button type="submit">Agregar</button>
  </form>
<br>
<div class="container">
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">#</th>  
    <th scope="col">Nombre</th>
    <th scope="col">Cantidad</th>
    <th scope="col">Precio</th>
    <th scope="col">Fecha</th>
    <th scope="col">Opciones</th>
  </tr>
</thead>
<tbody>
  @foreach($operation->products as $product)
  <tr>
    <th scope="row">{{ $product->id}}</th>
      <td> {{ $product->name }} </td>
      <td> {{ $product->pivot->quantity }} </td>
      <td> {{ $product->pivot->unit_price }} </td>
      <td> {{ $product->pivot->created_at }} </td>
      <td>
          <form method="post" action=" {{ url( '/admin/details/'.$operation->id.'/'.$product->id ) }} ">
              {{ csrf_field() }}
              {{ method_field('DELETE')}}
            <button class="btn btn-dark" type="submit">Eliminar</button>
          </form>
      </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>

<form method="post" action="{{ url('/admin/sales/'.$operation->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE')}}
    <br>
    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro que quiere eliminar esta factura?')">Eliminar Factura</button>
</form>
<a class="btn btn-primary btn-lg" href="{{ url('/admin/sales') }}" type="button">Finalizar</a>
@endsection
