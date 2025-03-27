<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <title>login</title>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <form id="formCadastro" name="formulario" action="#">
            <div class="input-box">
                <input type="email" id="email" placeholder="insira seu email" required>
            </div>
            <div class="input-box">
                <input id="txtSenha" type="password" placeholder="Crie uma senha" minlength="5" required> <!-- minlength e maxlenght são usadas para limitar caracteres em um campo input-->
            </div>
            <div class="input-box button">
                <input type="submit" value="Confirmar">
            </div>
            <div class="text">
                <h3>Não possui conta? <a href="{{route('registrar')}}">Registre-se</a></h3>
            </div>
        </form>
    </div>
</body>
</html>
