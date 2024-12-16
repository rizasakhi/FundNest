<nav class="navbar navbar-expand-lg navbar-light container-fluid col-10">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <h1>FundNest</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('campaign') }}">@lang('navbar.campaign')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('create-campaign') }}">@lang('navbar.create-campaign')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">@lang('navbar.about-us')</a>
          </li>
          @auth
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-link nav-link">@lang('navbar.logout')</button>
            </form>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link link-underline-dark" href="{{ route('login') }}">@lang('navbar.login')</a>
            </li>
          @endauth
        </ul>
        <form class="d-flex">
          <div class="dropdown pe-2">
            <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              {{ strtoupper(app()->getLocale()) }}
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('change.locale', 'id') }}">Indonesia</a></li>
              <li><a class="dropdown-item" href="{{ route('change.locale', 'en') }}">English</a></li>
            </ul>
          </div>
          <form action="{{ route('search-campaign') }}" method="GET">
            @csrf
            <input class="form-control me-2" name="search" type="search" placeholder="@lang('navbar.search')" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">@lang('navbar.search')</button>
          </form>
        </form>
      </div>
    </div>
  </nav>