<header>
    <h1>Hacia donde se quiere dirigir</h1>
    <nav>
      <ul>
        <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
        <li><a href="{{route('technical.index')}}" class="{{request()->routeIs('techincal.*') ? 'active' : ''}}">Tecnico</a></li>
        <li><a href="{{route('register.index')}}" class="{{request()->routeIs('register.*') ? 'active' : ''}}">Usuario</a></li>
      </ul>
    </nav>
  </header>