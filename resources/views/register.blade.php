@extends('index')
@section('content')
    <div class="formulario">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <input class="text" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
            @error('name')
               <small style="color: red" >{{ $message }}</small>
            @enderror
            <input class="text" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
               <small style="color: red" >{{ $message }}</small>
            @enderror
            <input class="text" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
            @error('password')
               <small style="color: red" >{{ $message }}</small>
            @enderror
            <div id="selecciones">
                <select class="text" name="gender_id">
                    <option value="" selected hidden>Elija una opcion</option>
                    @foreach ($gender as $item)
                        <option value="{{ $item->id }}" {{ old('gender_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
                @error('gender_id')
                   <small style="color: red" >{{ $message }}</small>
                @enderror
                <select class="text" name="rol_id">
                    <option value="" selected hidden>Elija una opcion</option>
                    @foreach ($rol as $item)
                        <option value="{{ $item->id }}" {{ old('rol_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
                @error('rol_id')
                   <small style="color: red" >{{ $message }}</small>
                @enderror
            </div>
            <input id="btn" type="submit" value="Registrame">
        </form>
    </div>
@endsection
