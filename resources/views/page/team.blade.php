@extends('frontsite.main', ['activePage'=> 'team', 'titlePage' => __('Team')])

@section('content')
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
@endsection
