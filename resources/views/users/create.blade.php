<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Laravel</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form action="">
        @csrf
        <label for="name">Nome de usuário</label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome" value="{{ old('name') }}" required> <br><br>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="{{ old('email') }}" required> <br><br>
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" required> <br><br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="{{ route('index-return') }}">Voltar</a>
</body>
</html>