<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('listarUsuario.css')}}">
    <title>Lista de Usuários</title>
</head>
<body>
    <main class="pesquisa-usuario">
        <h1 class="m-10">Buscar usuário Github</h1>
        <form action="{{route('listarusuarios')}}">
            <label for="">Nome do Usuário</label>
            <input type="text" id="user" name="user">
            <button onclick="getApi()">Buscar</button>
        </form>
    </main>
    <hr>

    {{-- Verifica se tem requisição, se tiver ele traz, se não, ele mostra a mensagem --}}
    @if(request()->has('user') && isset($response))
        <div class="card-user">
            @if(isset($response['avatar_url']))
                <img src="{{$response['avatar_url']}}" alt="" style="width: 80px; height: 80px; border-radius: 50%;">
            @endif
            <p>{{$response['name'] ?? 'Nome não disponível'}}</p>
            <p>@ {{$response['login'] ?? 'Login não disponível'}}</p>
            <a href="{{$response['html_url'] ?? '#'}}" target="_blank">Perfil no GitHub</a>
        </div>
        <button>Salvar na lista</button>
    @else
        <p>Busque um usuário</p>
    @endif


</body>
</html>
