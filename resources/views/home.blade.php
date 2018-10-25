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
                    <h1>Registrar Venta</h1>
                    <form action="{{ url('/admin/sales/store') }}">
                        <input type="submit" value="REGISTRAR VENTA">
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
