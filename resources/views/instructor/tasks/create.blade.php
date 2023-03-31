@extends('layouts.instructor')

@section('content')
           <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Registrar nueva tarea</h1>
                   <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tareas.store')}}" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="" >Titulo de la tarea</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="" >Descripción de la tarea</label>
                                <textarea name="description" id="" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="status">Estado</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">Seleccionar... </option>
                                    <option value="creado">Creado</option>
                                    <option value="realizado">Realizado</option>
                                    <option value="rechazado">Rechazado</option>
                                </select>
                            </div>

                          <hr>
                          <button class="btn btn-secondary w-100">Crear nueva tarea</button>
                        </form>
                    </div>
                   </div>
                </div>
            </div>
           </div>
@endsection