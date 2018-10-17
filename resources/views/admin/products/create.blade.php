<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h2>Crear nuevo producto:</h2>
        <form method="POST" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nombre del Producto</label>
            <input type="text" name="name"><br>
            <label>Descripcion</label>
            <input type="text" name="description"><br>
            <label>Precio</label>
            <input type="text" name="price"><br>
            <label>Stock</label><br>
            <input type="text" name="stock"><br>
            <label>Fecha de vencimiento</label><br>
            <input type="text" name="expiration_date"><br>
            <br>
            <label>Imagen</label><br>
            <input type="file" name="image"><br>
            <br>
            <label>Categoria (ID)</label><br>
            <input type="text" name="category_id" value="1"><br>
            <label>Proveedor (ID)</label><br>
            <input type="text" name="provider_id" value="1"><br>
            <input type="submit" name="">
        </form>
    </body>
</html>    