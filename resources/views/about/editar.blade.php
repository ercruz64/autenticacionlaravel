@extends('layouts.app')
@section('title','About')
@section('content')
<div class="container-fluid w-50 mt-2">
    <div class="card">        <div class="card-body">
            <h5 class="card-title">Modificar About</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('about.update',$about->id) }}" method="post">
                @csrf
                @method('PATCH')
                @include('about.campos')
                <button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
