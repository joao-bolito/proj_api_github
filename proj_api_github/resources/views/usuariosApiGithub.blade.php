<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('listarUsuario.css')}}">
    {{-- <script defer>
        function getApi(){
            const ul = document.querySelector('ul')
            ul.innerHTML = ''
            const user = document.querySelector('#user').value

            fetch(`https://api.github.com/users/${user}`)
                .then(async resposta => {
                    if (!resposta.ok) {
                        throw new Error("Usuário não encontrado");
                    }

                    let data = await resposta.json()

                    let li = document.createElement('li')
                    li.classList.add('m-10')

                    // li.innerHTML = `<strong>${item.name}</strong>`  // Aqui, você insere o nome do repositório.

                    li.innerHTML = `
                        <img src="${data.avatar_url}" alt="Avatar" width="80" style="border-radius: 50%;">
                        <strong>${data.name || "Nome não disponível"}</strong> <br>
                        <em>@${data.login}</em> <br>
                        <p>${data.bio || "Sem biografia"}</p>
                        <a href="${data.html_url}" target="_blank">Perfil no GitHub</a>
                    `;

                    ul.appendChild(li)

                    // Se você quiser adicionar uma linha horizontal entre os itens, pode fazer assim:
                    let hr = document.createElement('hr')
                    ul.appendChild(hr)
                    })
                .catch(e => {
                    console.log(e);
                    ul.innerHTML = ''

                    let li = document.createElement('li')
                    li.classList.add('m-10')
                    li.innerHTML = `<strong>Erro ao buscar o usuário!</strong>`

                    ul.appendChild(li)
                })
        }
    </script> --}}
    <title>Lista de Usuários</title>
</head>
<body>
    <h1 class="m-10">Github API</h1>
    <form action="{{route('listarusuarios')}}">
        <label for="">Nome do Usuário</label>
        <input type="text" id="user" name="user">
        <button onclick="getApi()">Buscar</button>
    </form>
    <hr>
    {{-- <ul class="m-10">

    </ul> --}}

    <div class="card-user">
        <img src="{{$response['avatar_url']}}" alt="" style="width: 80px; height: 80px; border-radius: 50%;">
        <p>{{$response['name']}}</p>
        <p>@ {{$response['login']}}</p>
        <a href="{{$response['html_url']}}" target="_blank">Perfil no GitHub</a>
    </div>
    <button>Salvar na lista</button>

</body>
</html>
