<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
    @guest
    <a class="navbar-brand" href="/">DMART</a>
    @else
    <a class="navbar-brand" href="/">DMART <span class="text-muted"> Welcome {{ Auth::user()->name }}</span></a>

    @endguest

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @guest
            <li class="nav-item">
                <a class="btn btn-primary" aria-current="page" href="/login" >Login</a>
            </li>
          @else
          <li class="nav-item mx-4">
            <i class="fa-solid fa-cart-shopping"></i>
          </li>
          <li class="nav-itam">
            <i class="fa-solid fa-user"></i>
          </li>

          <li class="nav-item">
            <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
