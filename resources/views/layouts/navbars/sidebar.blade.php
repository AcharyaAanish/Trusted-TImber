<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('assets') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="" class="simple-text logo-normal">
        {{ __('Trusted Timber') }}
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{url('/dash')}}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i><img style="width:25px" src="{{ asset('assets') }}/img/laravel.svg"></i>
            <p>{{ __('Trusted Timber') }}
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="laravelExample">
            <ul class="nav">
              {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="">
                  <span class="sidebar-mini"> UP </span>
                  <span class="sidebar-normal">{{ __('User profile') }} </span>
                </a>
              </li> --}}
              <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('user.index')}}">
                  <span class="sidebar-mini"> UM </span>
                  <span class="sidebar-normal"> {{ __('User Management') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('home.index')}}">
            <i class="material-icons">content_paste</i>
              <p>{{ __('HOME') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage ==  'product'? ' active' : '' }}">
            <a class="nav-link" href="{{route('product.index')}}">
                <i class="material-icons">library_books</i>
                  <p>{{ __('Product') }}</p>
              </a>
            </li>
        <li class="nav-item{{ $activePage == 'aboutus' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('aboutus.index')}}">
            <i class="material-icons">bubble_chart</i>
            <p>{{ __('About Us') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'service' ? ' active' : '' }}">
            <a class="nav-link" href="{{route('service.index')}}">
                <i class="material-icons">location_ons</i>
                  <p>{{ __('Service') }}</p>
            </a>
            </li>
        <li class="nav-item{{ $activePage == 'contactus' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('contactus.index')}}">
            <i class="material-icons">notifications</i>
            <p>{{ __('Contact Us') }}</p>
          </a>
        </li>
        {{--left code of sidebar use if need --}}

        {{-- <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
          <a class="nav-link" href="">
            <i class="material-icons">language</i>
            <p>{{ __('RTL Support') }}</p>
          </a>
        </li>
        <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link text-white bg-danger" href="">
            <i class="material-icons text-white">unarchive</i>
            <p>{{ __('Upgrade to PRO') }}</p>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
