<!-- ======= Blog Section ======= -->
<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach($latestNews as $post)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <a href="blog">
                                <img src="{{ $post->image }}" alt="">
                            </a>
                        </div>
                        <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">{{ $post->comments ? $post->comments()->count() . " Comments" : "0 Comments"}}</a>
                  </span>
                            <span class="date-type">
                    <i class="fa fa-calendar"></i>{{ $post->created_at->diffForHumans() }}
                  </span>
                        </div>
                        <div class="blog-text">
                            <h4>
                                <a href="blog">{{ $post->title }}</a>
                            </h4>
                            <p>
                                {!! $post->excerpt !!}
                            </p>
                        </div>
                        <span>
                  <a href="blog" class="ready-btn">Read more</a>
                </span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div><!-- End Blog Section -->
