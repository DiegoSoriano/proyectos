<header>
  <div class="blog-masthead">
    <div class="container">
      <nav class="nav">
        <a class="nav-link active" href="/blog">Home</a>


        @if (Auth::guest())
          {{-- expr --}}
          <a class="nav-link" href="/register">Registro</a>

          <a class="nav-link" href="/login">Login</a>
        @endif


        @if (Auth::check())
          {{-- expr --}}
          <a class="nav-link" href="/blog/create">Registrar Proyecto</a>
          <a class="nav-link" href="/logout">Logout</a>
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        @endif
        
      </nav>
    </div>
  </div>

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">Control de Proyectos</h1>

    </div>
  </div>
</header>