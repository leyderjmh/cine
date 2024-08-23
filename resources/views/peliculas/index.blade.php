@extends('layouts.app')

@section('content')
{{--Aqui es el contenido de la vista --}}
<div class="container">
    <div class="card">
        <div class="card-header">
            peliculas
        </div>
    <div class="card-body">
        <table class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>año</th>
                    <th>duracion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peliculas as $peliculas)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$peliculas->titulo}}</td>
                        <td>{{$peliculas->descripcion}}</td>
                        <td>{{$peliculas->año}}</td>
                        <td>{{$peliculas->duracion}}</td>
                        <td>
                            <a href="{{url('peliculas/'.$peliculas->id.'/ver')}}">
                                <button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                    ver</button>
                            </a>
                        </td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
</div>


@endsection()