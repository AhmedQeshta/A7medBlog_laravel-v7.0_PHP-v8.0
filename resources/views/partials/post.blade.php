<div class="case">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
            <a href="/post/{{$post->slug }}" class="img w-100 mb-3 mb-md-0" style="background-image: url('/storage/{{$post->image}}')"></a>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
            <div class="text w-100 pl-md-3">
                <span class="subheading">{{$post->title}}</span>
                <h2><a href="/post/{{$post->slug }}">{{$post->excerpt}}</a></h2>
                <ul class="media-social list-unstyled">
     <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
     <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
     <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
   </ul>
                <div class="meta">
                    <p class="mb-0"><a href="#">{{$post->created_at->format('F d, Y')}}</a> | {{$post->author->name}} <a href="#"></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

