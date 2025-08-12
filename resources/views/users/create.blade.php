<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>    
<body>
    <div class="container d-flex flex-column align-items-center bg-info-subtle border border-primary mt-5 px-0 rounded-2" style="height:70vh; width: 30vw;">
        <h1 class="text-light bg-primary w-100 text-center py-1">Cadastrar Usuário</h1>
        <form action="{{ route('user-store') }}" class="d-inline-flex flex-column justify-content-evenly" style="height: 75%;" method="POST">
            @csrf
            <div class="input-group mb-3">
                <label for="name" class="input-group-text bg-primary text-light">Nome</label>
                <input type="text" name="name" class="form-control bg-primary-subtle" id="name" placeholder="Digite seu nome" value="{{ old('name') }}" required>
            </div>
            <div class="input-group mb-3">
                <label for="email" class="input-group-text bg-primary text-light">E-mail</label>
                <input type="email" name="email" class="form-control bg-primary-subtle" id="email" placeholder="Digite seu e-mail" value="{{ old('email') }}" required>
            </div>
            <div class="input-group mb-3">
                <label for="password" class="input-group-text bg-primary text-light">Senha</label>
                <input type="password" name="password" class="form-control bg-primary-subtle" id="password" placeholder="Digite sua senha" value="{{ old('password') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <a href="{{ route('index-return') }}" class="btn btn-secondary-subtle mb-3" role="button">Voltar</a>
    </div>
</body>
</html>