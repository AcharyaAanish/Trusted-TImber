 <!-- ======= Header ======= -->

 <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/" style="color:#8D5E2F">Trusted Timber</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{isset($activePage) && $activePage=='home' ? 'active':''}}"><a {!!isset($activePage) && $activePage== 'home' ? 'aria-current="active"':''!!} href="/" style="color:#8D5E2F">{{__('Home')}}</a></li>
          <li class="{{isset($activePage) && $activePage=='about' ? 'active':''}}"><a {!!isset($activePage) && $activePage== 'about' ? 'aria-current="page"':''!!} href="{{url('/about')}}" style="color:#8D5E2F">{{__('About Us')}}</a></li>
          <li class="{{isset($activePage) && $activePage=='services' ? 'active':''}}"><a {!!isset($activePage) && $activePage== 'services' ? 'aria-current="page"':''!!} href="{{url('/services')}}" style="color:#8D5E2F">{{__('Services')}}</a></li>
          <li class="{{isset($activePage) && $activePage=='product' ? 'active':''}}"><a {!!isset($activePage) && $activePage== 'product' ? 'aria-current="page"':''!!} href="{{url('/productpage')}}" style="color:#8D5E2F">{{__('Product')}}</a></li>
          <li class="{{isset($activePage) && $activePage=='team' ? 'active':''}}"><a {!!isset($activePage) && $activePage == 'team'?'aria-current="page"':'' !!}href="{{url('/team')}}" style="color:#8D5E2F">{{__('Team')}}</a></li>
          <li class="{{isset($activePage) && $activePage=='contact' ? 'active':''}}"><a {!!isset($activePage) && $activePage== 'contact' ? 'aria-current="page"':''!!} href="{{url('/contact')}}" style="color:#8D5E2F">{{__('Contact')}}</a></li>

        </ul>
      </nav><!-- .nav-menu -->

{{-- {{isset($activePage) && $activePage=='home' ? 'active':''}} --}}
    </div>
  </header><!-- End Header -->
