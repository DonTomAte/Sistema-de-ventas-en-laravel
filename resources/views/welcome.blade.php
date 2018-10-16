<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto 281</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bienvenido al Proyecto
                </div>
            <!--
                <div clas   s="links">
                    <a href="">Documentacion</a>
                    <a href="">Contactanos</a>
                    <a href="">Informacion</a>
                </div>
            -->

            </div>
        </div>

        <center>
        <h1>Productos Disponibles</h1>
        <div class="midiv">    
        @foreach( $products as $product ) 
        <div class="midiv">    
                <h2>{{ $product-> name }}</h2><br>
                <img src="{{ $product->images ? $product->images()->first()->image : 'no.tiene' }}" alt="Aqui hay una imagen">
                <p>{{ $product->description}}</p>
                <td>Bs.  {{ $product->price}}</td>
        </div>   
         @endforeach
    {{ $products->links() }}   
        </center>
<!--
        <table>
            <th>Nombre</th>
            <th>Image</th>
            <th>Descripcion</th>
            <th>Precio</th>

        <h1>Products</h1>

         @foreach( $products as $product ) 
            <tr>
                <td>{{ $product-> name }}</td>
                <td><img src="{{ $product->image }}" alt="Aqui hay una imagen"></td>
                <td>{{ $product->description}}</td>
                <td>Bs.  {{ $product->price}}</td>
            </tr>
         @endforeach
        </table>    
        {{ $products->links() }}    
        </div>   
        </center>
-->
    </body>
</html>

