@php
  $route = Route::current()->getName();
@endphp

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('home') }}">Subrata</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
          <li><a class="nav-link scrollto {{ Request::is('project') ? 'active' : '' }}" href="{{ url('/project') }}">Projects</a></li>
          <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>