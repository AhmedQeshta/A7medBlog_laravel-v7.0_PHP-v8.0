@extends('layout\mianBlogRes')
 
@section('index')
	
    @include('partials.nav')
    
    {{-- content --}}

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <h1 class="mb-3 bread">Contact us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
  
      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span>Palestine , Gaza , Rafah</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">0592 157 001</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">Ahmedqeshta0592@gmail.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website</span> <a href="#">A7medPro.com</a></p>
            </div>
          </div>
          <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">

                <form action="#" method="POST" class="bg-light p-4 p-md-5 contact-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                  <div class="form-group">
                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                  </div>
                </form>
            
            </div>
  
            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
          </div>
        </div>
      </section>
     

    {{-- end --}}
	@include('partials.footer')
    
  

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
@endsection