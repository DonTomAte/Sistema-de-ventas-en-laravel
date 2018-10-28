@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Panel de Control</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <h2>¿que es esto?</h2>
                            {{ session('status') }}
                        </div>
                    @endif
                    @if( auth()->user()->admin)
                        <form method="POST" action="{{ url('admin/sales/store')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id}}">
                            <input class="btn btn-primary btn-lg" type="submit" value="Registrar nueva venta">
                        </form>
                    @else
                        <h2>Realizar pedido</h2>
                        <a href=" {{ url( '/customer/orders' )}} ">Mi pedido</a>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection