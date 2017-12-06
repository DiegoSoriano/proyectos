@extends('layouts.blog.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $blog->title }}</h1>

        <h3>Mision</h3>
        {{ $blog->mision }}
        <hr>

        <h3>Vision</h3>
        {{ $blog->vision }}
        <hr>

        <h3>Objetivo</h3>
        {{ $blog->objetivo }}
        <hr>

        <h3>Descripcion</h3>
        {{ $blog->body }}
        <hr>

        <h3>Integrantes</h3>
        {{ $blog->integrantes }}

        <hr>

        <div class="comments">

            <ul class="list-group">

                @foreach($blog->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach

            </ul>
            
        </div>
        
        <hr>


        @if (Auth::user()->permiso == 3)

            <div class="card">
                <div class="card-body">
                    <form action="/blog/{{ $blog->id }}/comments" method="POST">
                        {{ csrf_field() }}
                        {{-- {{ method_field('PATCH') }} --}}
                        <div class="form-group">
                            <textarea name="body" id="body" cols="30" rows="5" class="form-control" placeholder="Calificacion." required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Calificar</button>
                        </div>
                    </form>
                    @include('layouts.errors')
                </div>
            </div>

        @endif

    </div>
@endsection