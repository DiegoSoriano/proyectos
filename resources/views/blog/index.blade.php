@extends('layouts.blog.master')

@section('content')

<div class="col-sm-8 blog-main">
        
        @foreach($blogs as $blog)
            @include('blog.blog')<!-- /.blog-post -->
        @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div>

@endsection