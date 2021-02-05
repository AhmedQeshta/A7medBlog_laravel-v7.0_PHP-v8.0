@extends('layout\mianBlogRes')
 
@section('index')
	
	@include('partials.nav')
	
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">Hello! Welcome to</h2>
          	<h1 class="mb-4 mb-md-0">A7med<sup>Pro</sup>  blog</h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	          			<div class="mouse">
								<a href="#" class="mouse-icon">
									<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
								</a>
							</div>
						</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>

   	<section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
					   
					   {{-- post content --}}
					@foreach ($posts as $post)
						@include('partials.post', ['post' => $post])
					@endforeach  
					
   				</div>
   			</div>
   			<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
				{{$posts->links()}}
            </div>
          </div>
        </div>
   		</div>
   	</section>

  
	@include('partials.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@endsection