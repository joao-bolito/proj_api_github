<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Admins</title>
</head>
<body>
    @foreach ($admin as $admins)
        <p>{{$admins->nome}}</p>
    @endforeach
</body>
</html>
