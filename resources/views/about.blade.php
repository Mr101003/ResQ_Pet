@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('partials.header')
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
                Kami adalah tim yang berdedikasi untuk menyelamatkan dan merawat hewan-hewan yang membutuhkan. Dengan berbagai pengalaman dan keahlian dalam bidang penyelamatan hewan, kami berkomitmen untuk memberikan layanan terbaik dan memastikan setiap hewan mendapatkan kasih sayang dan perawatan yang layak. Misi kami adalah menciptakan lingkungan yang aman dan penuh kasih untuk semua hewan. Bersama kita bisa membuat perbedaan nyata dalam kehidupan hewan-hewan ini.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="images/ResQ4.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section> 

  <!-- end about section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                      Alamat
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                      +02 1234567890
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                      demo@gmail.com
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->
  @endsection
