@extends('layouts.app')

@section('content')
{{--Aqui es el contenido de la vista --}}
<div class="container">
    <div class="card">
        <div class="card-header">
            categorias
        </div>
    <div class="card-body">
        <table class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td>{{$categoria->descripcion}}</td>
                        <td>
                            <a href="{{url('categorias/'.$categoria->id.'/edit')}}">
                                <button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>
                                    editar</button>
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



    