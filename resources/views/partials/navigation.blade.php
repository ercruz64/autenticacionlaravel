<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('/')? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('about.index')? 'active' : ''}}" href="{{route('about.index')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('inicio')? 'active' : ''}}" href="{{route('inicio')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('nosotros')? 'active' : ''}}" href="{{route('nosotros')}}">Nosotros</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('registrar')? 'active' : ''}}" href="{{route('registrar')}}">Registrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->routeIs('login')? 'active' : ''}}" 
          href="{{route('login')}}">Login</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
          <form action="{{route('logout')}}" method="post">
            @csrf
            <a  href="#" class="nav-link" onclick="this.closest('form').submit();">Logout</a>
          </form>
        </li>
        <li class="nav-item">
            <a  href="#" class="nav-link">Usuario: {{Auth::user()}}</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
