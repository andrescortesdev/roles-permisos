@extends('layouts.aprendiz')

@section('content')
          <div class="container">
            <div class="row">
                <div class="col s12">
                    <table>
                        <thead>
                            <tr>
                                <th>TITULO</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ESTADO</th>
                                <th>CAMBIAR ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }} </td>
                                    <td>{{ $task->description }} </td>
                                    <td>{{ $task->status }} </td>
                                    <td>
                                        <div class="input-field col s12">
                                            <select>
                                              <option {{ $task->status == 'creado' ? 'selected' : ''}} value="creado">Creado</option>
                                              <option {{ $task->status == 'realizado' ? 'selected' : ''}} value="realizado">Realizado</option>
                                              <option {{ $task->status == 'rechazado' ? 'selected' : ''}} value="rechazado">Rechazado</option>
                                            </select>
                                            <label>Actualizar estado</label>
                                          </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
@endsection