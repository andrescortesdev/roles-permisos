@extends('layouts.guest')
@section('content')
  
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-4">
                <div class="card-body">
                     <form action="{{ route('login')}}" method="post">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="">Correo</label>
                            <input type="email" name="email" class="form-control"  placeholder="Ingrese su correo" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" class="form-control"  placeholder="Ingrese su contraseña" required>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Iniciar</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection