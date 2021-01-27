@extends('frontsite.main',['activePage'=>'product','titlePage'=>__('Product')])
@php
    $products = App\Models\Product::latest()->get();
@endphp
@section('content')
    <!-- ======= Product Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>{{__('Product')}}</h2>
            <p>{{__('Check Our Product')}}</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">

            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              @foreach ($products as $product)
              <div class="col-lg-4 col-md-6 portfolio-item ">
                  <img src="{{asset("storage/$product->image")}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{$product->type}}</h4>
                    <p>{!!$product->description !!}</p>
                    <a href="{{asset("storage/$product->image")}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                  </div>
              </div>
              @endforeach



          </div>

        </div>
      </section><!-- End Product Section -->
@endsection
