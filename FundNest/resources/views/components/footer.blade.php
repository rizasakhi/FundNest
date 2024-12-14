<div class="container" bis_skin_checked="1">
    <footer class="py-5">
      <div class="row d-flex justify-content-between" bis_skin_checked="1">
        <div class="col-6 col-md-2 mb-3" bis_skin_checked="1">
          <h5>@lang('navbar.section')</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 text-muted">@lang('navbar.home')</a></li>
            <li class="nav-item mb-2"><a href="{{ route('campaign') }}" class="nav-link p-0 text-muted">@lang('navbar.campaign')</a></li>
            <li class="nav-item mb-2"><a href="{{ route('create-campaign') }}" class="nav-link p-0 text-muted">@lang('navbar.create-campaign')</a></li>
            <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-muted">@lang('navbar.about-us')</a></li>
          </ul>
        </div>
  
        <div class="col-6 offset-md-1 mb-3" bis_skin_checked="1">
          <form>
            <h5>@lang('navbar.subscribe')</h5>
            <p>@lang('navbar.message')</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2" bis_skin_checked="1">
              <label for="newsletter1" class="visually-hidden">@lang('navbar.email-placeholder')</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="@lang('navbar.email-placeholder')">
              <button class="btn btn-outline-dark" type="button">@lang('navbar.subs-button')</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top" bis_skin_checked="1">
        <p>© 2024 FundNest, Inc. @lang('navbar.rights')</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>