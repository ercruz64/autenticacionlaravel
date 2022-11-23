@extends('layouts.app')
@section('title','About')
@section('content')
<div class="container-fluid w-50 mt-2">
    @auth
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ABOUT</h5>
            @if (session('success'))
            <h5 class="alert alert-success">{{ session('success') }}</h5>
            @endif
            <form action="{{ route('about.store') }}" method="post">
                @csrf
                @include('about.campos')
                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    @endauth
    @if($abouts)
    <table class="table table-striped table-dark ">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th colspan="2">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $item)
            <tr>
                <td>{{$item->nombreUsuario}}</td>
                <td>{{$item->descripcion}}</td>
                @auth
                <td>
                    <a type="button" href="{{ route('about.edit',$item->id)}}">Actualizar</a>
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection