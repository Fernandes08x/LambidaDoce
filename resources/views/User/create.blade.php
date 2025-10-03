@extends('layouts.admin')

@section('conteudo')
    <h1>Criar novo Usuário</h1>

    <form action="{{route('user.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div>
            <label for="passoword">Senha:</label>
            <input type="text" id="password" name="password" required>
        </div>

        <div>
            <button type="submit">Criar Usuário</button>
        </div>
    </form>
@endsection