@extends('layouts.instructor')

@section('content')
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('tareas.create')}}" class="btn btn-primary btn-sm mb-4" >Crear nueva tarea</a>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TITULO</th>
                                    <th>DESCRIPCIÓN</th>
                                    <th>ESTADO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-link">Detalles</a>
                                        <a href="" class="btn btn-sm btn-link">Editar</a>
                                        <a href="" class="btn btn-sm btn-link text-danger">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           </div>
@endsection