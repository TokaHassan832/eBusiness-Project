

<x-layout>
    <main id="main">
        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer2">
                                    <h1 class="title2">My Blog</h1>
                                </div>
                                <div class="layer3">
                                    <h2 class="title3">Profesional Blog Page</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    @include('posts._sidebar')
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
{{--                            @unless(count($posts)==0)--}}
                            @foreach($posts as $post)
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="blog/posts/{{$post->id}}">
                                            <img src="{{$post->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#">{{$post->comments ? $post->comments()->count() . " Comments" : "0 Comments"}}</a>
                    </span>
                                        <span class="date-type">
                      <i class="bi bi-calendar"></i>{{$post->created_at->diffForHumans()}}
                    </span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a href="blog/posts/{{$post->id}}">{{$post->title}}</a>
                                        </h4>
                                        <p>
                                            {!! $post->excerpt !!}
                                        </p>
                                    </div>
                                    <span>
                    <a href="blog/posts/{{$post->id}}" class="ready-btn">Read more</a>
                  </span>
                                </div>
                            </div>
                            @endforeach
{{--                            @else--}}
{{--                            <p>No Posts Found..</p>--}}
{{--                            @endunless--}}
                        </div>
{{--                        <div class="mt-6 p-4">--}}
{{--                            {{ $posts->links() }}--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->
</x-layout>


