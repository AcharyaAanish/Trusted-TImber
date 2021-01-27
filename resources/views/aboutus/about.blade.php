@extends('frontsite.main',['activePage' => 'about' , 'titlePage' => __('About Us')])
@php
    $about = App\Models\Aboutus::latest()->first();
@endphp
@section('content')
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>{{__('about us')}}</h2>
                <p>{{__('About us')}}</p>
              </div>
          <div class="row">

            <div class="col-lg-12 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{asset("storage/$about->image")}}" class="img-fluid" alt="">

            </div>

            <div class="col-lg-12 pt-3 pt-lg-0 content">
              {!! $about->introduction !!}
            </div>

          </div>

        </div>
      </section><!-- End About Section -->
@endsection
