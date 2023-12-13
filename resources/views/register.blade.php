@extends('index')
@section('content')
    <div class="formulario">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
            @error('name')
                <small>{{ $message }}</small>
            @enderror
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <small>{{ $message }}</small>
            @enderror
            <input type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
            @error('password')
                <small>{{ $message }}</small>
            @enderror
            <select name="gender_id">
                <option value="" selected hidden>Seleccione una opcion</option>
                @foreach ($gender as $item)
                    <option value="{{ $item->id }}" {{ old('gender_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}</option>
                @endforeach
            </select>
            <select name="rol_id">
                <option value="" selected hidden>Seleccione una opcion</option>
                @foreach ($rol as $item)
                    <option value="{{ $item->id }}" {{ old('rol_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="Registrame">
        </form>
    </div>
    
@endsection