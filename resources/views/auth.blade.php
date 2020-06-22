@extends('layout')

@section('content')
    <form method="POST" action="/login">
        @csrf
        Пароль: <input name="password" /> <input type="submit" value="Вход" />
    </form>
@endsection

