@extends('layouts.blog.master')

@section('content')
    <div class="col-sm-8">
        <h1>Register</h1>
        <form action="/register" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email::</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label class="mr-sm-2" for="permiso">Usuario</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="permiso" name="permiso">
                    <option selected>Escoge...</option>
                    <option value="1">Maestro</option>
                    <option value="2">Alumno</option>
                    <option value="3">Evaluador</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>



            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

                @include('layouts.errors')
           
        </form>
    </div>
@endsection

