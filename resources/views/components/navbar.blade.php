<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container-fluid">
        <img class="eva-icon" src="img/eva icon.png" alt="eva">
      <a class="navbar-brand" href="{{route('home')}}">Evangelion Wiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">



            <div class="dropdown">
              <button class="btn dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown">
                Personaggi
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('char')}}">Lilin</a></li>
                <li><a class="dropdown-item" href="#">Angeli</a></li>
              </ul>
            </div>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add')}}">Aggiungi Elemento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contattaci</a>
          </li>
        </ul>
      </div>
      <div class="dropdown">
        <button class="btn dropdown-toggle me-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
         <i class="fa-solid fa-circle-user"></i>
         @auth
             <span>{{Auth::user()->name}}</span> 
         @endauth
        </button>
        <ul class="dropdown-menu">
          @guest

             <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>

          @else

          <li>
            <a class="dropdown-item" href="">Profilo</a>
          </li>

          <form action="{{route('logout')}}" method="POST">
            @csrf
            <li>
              <button class="dropdown-item" type="submit">Logout</button>
            </li>
          </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>