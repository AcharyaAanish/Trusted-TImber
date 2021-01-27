@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{route('home.index')}}">
          <div class="card card-stats">

            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">home</i>
              </div>
            <a href="{{route('home.index')}}"><h3 class="card-title">{{__('Home')}}</h3></a>
            </div>
            <div class="card-footer">

            </div>
          </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{route('product.index')}}">
          <div class="card card-stats">

            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">topic</i>
              </div>
            <a href="{{route('product.index')}}"><h3 class="card-title">{{__('Product')}}</h3></a>
            </div>
            <div class="card-footer">

            </div>
          </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{route('aboutus.index')}}">
          <div class="card card-stats">

            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">book</i>
              </div>
            <a href="{{route('aboutus.index')}}"><h3 class="card-title">{{__('About Us')}}</h3></a>
            </div>
            <div class="card-footer">

            </div>
          </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{route('service.index')}}">
          <div class="card card-stats">

            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">work</i>
              </div>
            <a href="{{route('service.index')}}"><h3 class="card-title">{{__('Service')}}</h3></a>
            </div>
            <div class="card-footer">

            </div>
          </div>
            </a>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="{{route('contactus.index')}}">
          <div class="card card-stats">

            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contact_page</i>
              </div>
            <a href="{{route('contactus.index')}}"><h3 class="card-title">{{__('Contact Us')}}</h3></a>
            </div>
            <div class="card-footer">

            </div>
          </div>
            </a>

        </div>

      </div>


    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
