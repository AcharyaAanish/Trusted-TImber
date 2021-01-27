@extends('frontsite.main',['activePage'=>'services','titlePage'=>__('Services')])

@php
    $services = App\Models\Service::latest()->get();
@endphp
@section('content')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg about-boxes">
        {{-- <section id="about-boxes" class="about-boxes"> --}}
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{{__('SERVICES')}}</h2>
                    <p>{{__('Check Our Services')}}</p>
                  </div>
              <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="card">

                    <img src="{{asset("storage/$service->image")}}" class="card-img-top" alt="...">
                    <div class="card-icon">
                      <i class="ri-brush-4-line"></i>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><a href="">{{$service->title}}</a></h5>
                      <p class="card-text">{!! $service->description !!}</p>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>

            </div>
          {{-- </section><!-- End About Boxes Section --> --}}

    </section><!-- End Services Section -->
@endsection
