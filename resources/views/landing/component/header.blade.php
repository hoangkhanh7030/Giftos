<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="{{ route('landing.home') }}">
        <span>
          Giftos
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item {{ Route::is('landing.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('landing.home') }}">Home</a>
          </li>
          <li class="nav-item {{ Route::is('landing.shop') ? 'active' : '' }}" >
            <a class="nav-link" href="{{ route('landing.shop') }}">
              Shop
            </a>
          </li>
          <li class="nav-item {{ Route::is('landing.why') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('landing.why') }}">
              Why Us
            </a>
          </li>
          <li class="nav-item {{ Route::is('landing.testimonial') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('landing.testimonial') }}">
              Testimonial
            </a>
          </li>
          <li class="nav-item {{ Route::is('landing.contact') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('landing.contact') }}">Contact Us</a>
          </li>
        </ul>
        <div class="user_option">
          <a href="">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <a href="">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
          <form class="form-inline ">
            <button class="btn nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>