@extends('/layouts.app')
@section('title','Login')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
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

                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input name="remember" class="form-check-input mt-0" type="checkbox" value="on">
                    </div>
                    <label for="checkbox" class="form-control cursor-pointer" aria-label="Text input with checkbox">Recuerdame</label>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" name="enviar" class="btn btn-primary">Login</button>
                    <a href="{{route('registrar')}}" class="btn btn-primary">Registrarse</a>
                </div>

                
            </form>
        </div>
    </div>
    @endsection