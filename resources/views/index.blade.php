<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Bebidas</h1>
        @foreach ($bebidas as $bebida)
            <div>
                {{ $bebida->nombre }} - {{ $bebida->stock }}  <br>
            </div>
        @endforeach
    </body>
</html>