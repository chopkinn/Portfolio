@section('header')
<div id="myHeader" class="header"></div>
<header>
    <div class="px-3 py-2 bg-white text-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none">
            <img src="{{ asset('images/NA.jpg') }}" width="50" height="50" alt="Avatar" style="border-radius: 50%;">
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#C1" class="nav-link text-dark">
                Main
              </a>
            </li>
            <li>
              <a href="#C2" class="nav-link text-dark">
                About me
              </a>
            </li>
            <li>
              <a href="#C3" class="nav-link text-dark">
                My projects
              </a>
            </li>
            <li>
              <a href="#C4" class="nav-link text-dark">
                Skills
              </a>
            </li>
            <li>
              <a href="#C5" class="nav-link text-dark">
                Experience
              </a>
            </li>
            <li>
              <a href="#C6" class="nav-link text-dark">
                Contacts
              </a>
            </li>

            <li>
              <a href="{{ route('admin') }}" class="btn btn-warning text-dark">
                Dashboard
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 mb-3">
      <div class="container d-flex flex-wrap justify-content-end">
      @if(session('status'))
        <h4 class="me-3 mt-1">
            {{ session('status') }}
          </h4>
      @endif  
      
      @auth
          <h4 class="me-3 mt-1">
            {{ auth()->user()->name }}
          </h4>
          <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="submit" class="btn btn-primary text-white me-2">Logout</button>
          </form>
        @endauth
        @guest
          @include('inc.login')
        @endguest
      </div>
    </div>
  </header>