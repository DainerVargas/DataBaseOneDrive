@extends('index')

@section('session')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <small>{{ $message }}</small>
        @enderror
        <input type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
        @error('password')
            <small>{{ $message }}</small>
        @enderror

        <input type="submit" value="Iniciar sesion">
    </form>
@endsection
