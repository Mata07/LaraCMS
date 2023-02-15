<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Algebra Seminarski Zadatak') }}</title>
    @vite(['resources/js/app.js'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/storage/assets/solartheme/bootstrap.css">
    <link rel="stylesheet" href="/storage/assets/solartheme/bootstrap-icons.css">
    <link rel="stylesheet" href="/storage/assets/solartheme/prism-okaidia.css">
    {{-- <link rel="stylesheet" href="/storage/assets/solartheme/custom.min.css"> --}}
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">Algebra CMS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/home') }}">Početna
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li><a class="nav-link" href="{{ route('users.index') }}">Uredi Korisnike</a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}">Uredi Role</a></li>
                        <li><a class="nav-link" href="{{ route('posts.index') }}">Uredi Objave</a></li>
                            
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Odjava') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li> --}}
                </ul>
                {{-- <form class="d-flex">
                  <input class="form-control me-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
              </div>
            </div>
          </nav>


        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>


    </div>

            <!-- Footer-->
            <footer class="bg-dark pt-4 pb-4 footer mt-auto py-3">
              <div class="container px-4 px-lg-5">
                  <div class="row gx-4 gx-lg-5 justify-content-center">
                      <div class="col-md-10 col-lg-8 col-xl-7">                        
                          <div class="small text-center text-muted fst-italic">Copyright &copy; Algebra CMS</div>
                      </div>
                  </div>
              </div>
          </footer>
          {{-- <!-- Bootstrap core JS-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
          <!-- Core theme JS-->
          <script src="resources/js/scripts.js"></script> --}}
</body>
</html>