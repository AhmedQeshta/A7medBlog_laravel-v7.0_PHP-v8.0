@extends('layout\mianBlogRes')
 
@section('index')
	
	@include('partials.nav')
    
    {{-- content --}}

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/storage/{{$page->image}}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
              <h1 class="mb-3 bread">{{$page->title}}</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$page->title}}<i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
  

      <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container">
              <div class="row d-flex">
                  <div class="col-md-6 d-flex">
                      <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(/storage/{{$page->image}});">
                          <a href="https://vimeo.com/user118444499/review/432767327/bfd7d77396" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                              <span class="icon-play"></span>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 pl-md-5 py-md-5">
                      <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to A7medPro</span>
                      <h2 class="mb-4">We give you the best articles you want.</h2>
                      <p>
                          {!! $page->body !!}
                      </p>
                      
                    </div>
                  </div>
              </div>
          </div>
          </div>
      </section>
  
  


    {{-- end content --}}

    @include('partials.footer')
    
  

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
@endsection