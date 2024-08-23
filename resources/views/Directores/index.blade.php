@extends('layouts.app')

@section('content')
{{--Aqui es el contenido de la vista --}}
<div class="container">
    <div class="card">
        <div class="card-header">
            Directores
        </div>
    <div class="card-body">
        <table class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>biografia</th>
                    <th>fecha_nac</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directores as $directores)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$directores->nombre}}</td>
                        <td>{{$directores->biografia}}</td>
                        <td>{{$directores->fecha_nac}}</td>
                        <td>
                            <a href="{{url('directores/'.$directores->id.'/ver')}}">
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