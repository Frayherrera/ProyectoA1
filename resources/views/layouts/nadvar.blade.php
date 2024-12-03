<nav style="    background: #425e76;" class="navbar">
  <a style="margin-left: 20px ;" href="/home" class="navbar-brand">
    <img src="/img/logo.png" alt="Logo" style="width: 40px;">
    <span style="color: white;">MARYAUTOS</span>
  </a>
  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </div>


  <div style="margin-right: 40px;" class="dropdown">
    <button style="background-color: #3b556b;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      {{Auth::user()->name}}
    </button>
    <ul style="background-color: #3b556b; left: -80px;" class="dropdown-menu">

      <li> <button form="logout-form" type="submit" class="dropdown-item" style=" background-color: #3b556b; border-style: none; color: white;">Cerrar sesion</button></li>
    </ul>
  </div>

</nav>