@extends('index')

@section('session')
<div class="formulario">

    <form action="{{ route('login') }}" method="post">
        @csrf
        <input class="text" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
       <small style="color: red" >{{ $message }}</small>
        @enderror
        <input class="text" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
        @error('password')
       <small style="color: red" >{{ $message }}</small>
        @enderror
        
        <input id="btn" type="submit" value="Iniciar sesion">
    </form>
</div>
@endsection
