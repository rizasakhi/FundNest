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
            <a class="nav-link" aria-current="page" href="{{ route('campaign') }}">Campaign</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('create-campaign') }}">Create Campaign</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>