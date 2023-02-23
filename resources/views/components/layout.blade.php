<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? '' }}</title>
    <meta content="{{ $description ?? '' }}" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- CSS here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    
    @stack('headTags')
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand align-items-center d-flex" href="/">
          <img src="{{ asset('assets/img/logo.svg') }}" alt="" width="60" height="54">
          <span class="mb-0 h1">Proactive</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav float-lg-end">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>

            @guest
            <a href="/signup" class="nav-item nav-link">Register</a>
            <a href="/login" class="nav-item nav-link">Login</a>
            @endguest

            @auth
                <form method="POST" action="/logout" class="">
                    @csrf
                    <a  onclick="this.closest('form').submit();return false;" href="javascript:{}" class="btn btn-secondary text-light rounded-pill py-2 px-4"> <i class="fa-solid fa-door-open"></i> Logout</a>
                </form>  
                @endauth
          </div>
        </div>
      </div>
    </nav>

    <x-flash-message />

    <main>
      {{$slot}} 
    </main>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="{{ asset('assets/js/main.js') }}"></script>
@stack('footerTags')  
</body>
</html>