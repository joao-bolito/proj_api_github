<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer>
        function getApi(){
            const ul = document.querySelector('ul')
            ul.innerHTML = ''
            const user = document.querySelector('#user').value

            fetch(`https://api.github.com/users/${user}/repos`)
                .then(async resposta => {

                    let data = await resposta.json()

                    data.map(item => {
                        let li = document.createElement('li')
                        li.classList.add('m-10')

                        li.innerHTML = `<strong>${item.name}</strong>`  // Aqui, você insere o nome do repositório.

                        ul.appendChild(li)

                        // Se você quiser adicionar uma linha horizontal entre os itens, pode fazer assim:
                        let hr = document.createElement('hr')
                        ul.appendChild(hr)
                    })
                })
                .catch(e => {
                    console.log(e);
                })
        }
    </script>
    <title>Lista de Usuários</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        hr{
            width: 50vw;
            margin: 10px;
        }

        .m-10{
            margin: 10px;
        }

        li{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h1 class="m-10">Github API</h1>
    <div>
        <label for="">Nome do Usuário</label>
        <input type="text" id="user">
        <button onclick="getApi()">Buscar</button>
    </div>
    <hr>
    <ul class="m-10">

    </ul>

</body>
</html>
