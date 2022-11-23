@extends('/layouts.app')
@section('title','Registrar Usuario')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Registrar Usuario</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('registrar') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Usuario</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email Usuario</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@endsection