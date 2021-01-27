@extends('frontsite.main',['activePage' => 'home' , 'titlePage' => __('Home')])
@php
$home = App\Models\Home::latest()->first();
$products= App\Models\Product::latest()->limit(6)->get();
$about = App\Models\Aboutus::latest()->first();
$services = App\Models\Service::latest()->limit(3)->get();
@endphp
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Trusted Timber </h1>
      <h2>Furniture for your life time</h2>
      {{-- <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Product</a>
      </div> --}}
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{__('ABOUT US')}}</h2>
            <p>{{__('About us')}}</p>
          </div>
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-bed"></i>
                  <span data-toggle="counter-up">5</span>
                  <p>Product Type</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up"></span>
                  <p>Sales</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">1</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">0</span>
                  <p>Best Seller Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset("storage/$about->image")}}" class="img-fluid" alt="">

          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            {!! $about->introduction !!}
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="front/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Santosh Acharya</h4>
                <span>CEO/Product Developer</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="front/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anup Neupane</h4>
                <span>Product Design</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="front/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4></h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

        <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>{{__('Damak -13, Jhapa , Nepal')}}</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>trustedtimber@gmail.com<br>timbertrusted@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>01-4420036<br>01-4028836</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="{{route('contactus.store')}}" method="post" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-5 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-5 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

