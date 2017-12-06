@extends('layouts.blog.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Registra tu proyecto</h1>

        <hr>

        <form method="POST" action="/blog">
            {{ csrf_field() }}

          <div class="form-group">

            <label for="title">Titulo</label>

            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>

          </div>

            <div class="form-group">

                <label for="mision">Mision</label>

                <textarea name="mision" id="mision" cols="30" rows="10" class="form-control" required></textarea>

            </div>

            <div class="form-group">

                <label for="vision">Vision</label>

                <textarea name="vision" id="vision" cols="30" rows="10" class="form-control" required></textarea>

            </div>

            <div class="form-group">

                <label for="objetivo">Objetivo</label>

                <textarea name="objetivo" id="objetivo" cols="30" rows="10" class="form-control" required></textarea>

            </div>


          <div class="form-group">

            <label for="body">Descripcion</label>

            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>

          </div>

            <div class="form-group">

                <label for="integrantes">Integrantes</label>

                <textarea name="integrantes" id="integrantes" cols="30" rows="10" class="form-control" required></textarea>

            </div>

          <div class="form-group">
              <button type="submit" class="btn btn-primary">Registrar</button>
          </div>

            @include('layouts.errors')
        </form>
            


    </div>
@endsection