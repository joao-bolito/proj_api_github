<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('registro.css')}}">
    <title>Registro</title>
</head>
<body>
    <div class="wrapper">
        <h2>Registro de admins</h2>
        <form id="formCadastro" name="formulario" action="{{route('cadastrarAdmin')}}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="nome" id="userName" placeholder="Insira seu nome" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="insira seu email" required>
            </div>
            <div class="input-box">
                <input id="txtSenha" name="senha" type="password" placeholder="Crie uma senha" minlength="5" required> <!-- minlength e maxlenght são usadas para limitar caracteres em um campo input-->
            </div>
            <div class="input-box">
                <input id="repetir_senha" type="password" placeholder="Repita a senha" required>
            </div>
            <div class="input-box button">
                <input type="submit" value="Confirmar">
            </div>
            <div class="text">
                <h3>Já possui conta? <a href="{{asset('login')}}">Login</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
