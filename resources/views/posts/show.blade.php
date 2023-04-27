

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
                                    <h1 class="title2">Blog Details </h1>
                                </div>
                                <div class="layer3">
                                    <h2 class="title3">profesional Blog Page</h2>
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- single-blog start -->
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="{{$post->image}}" alt="" />
                                    </div>
                                    <div class="post-information">
                                        <h2>{{$post->title}}</h2>
                                        <div class="entry-meta">
                                            <span class="author-meta"><i class="bi bi-person"></i> <a href="#">{{$post->author->name}}</a></span>
                                            <span><i class="bi bi-clock"></i> {{$post->created_at->diffForHumans()}}</span>
                                            <span class="tag-meta">
                                                @foreach($post->tags as $tag)
                                                <i class="bi bi-folder"></i>
                                                <a href="#">{{ $tag->name }}</a>
                                                @endforeach

                                            </span>
                                            <span><i class="bi bi-chat"></i> <a href="#">{{$post->comments ? $post->comments()->count() . " Comments" : "0 Comments"}}</a></span>
                                        </div>
                                        <div class="entry-content">
                                            <p>
                                                {!! $post->body !!}
                                            </p>
                                        </div>
                                    </div>
                                </article>

                                <!-- Comments -->
                                <div class="clear"></div>
                                <div class="single-post-comments">
                                    <div class="comments-area">
                                        <div class="comments-heading">
                                            <h3>{{$post->comments ? $post->comments()->count() . " Comments" : "0 Comments"}}</h3>
                                        </div>
                                        <div class="comments-list">
                                            <ul>
                                                <li class="threaded-comments">
                                                    <div class="comments-details">
                                                        <div class="comments-list-img">
                                                            <img class="w-25" src="/storage/{{ $post->author->image }}}" alt="post-author">
                                                        </div>
                                                        <div class="comments-content-wrap">
                                                            @foreach($post->comments as $comment)
                                                            <span>
                                                                <b><a href="#">{{$comment->author->name}}</a></b>
                                                                <span class="post-time">{{$comment->created_at->diffForHumans()}}</span>
                                                                <a href="#">Reply</a>
                                                            </span>
                                                                <p>{{$comment->body}}</p>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @include('posts._add-comment-form')
                                </div>
                                <!-- single-blog end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->
</x-layout>


