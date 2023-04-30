<div class="col-lg-4 col-md-4">
    <div class="page-head-blog">
        <div class="single-blog-page">
            <!-- search option start -->
            <form action="blog">
                <div class="search-option">
                    <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                    <button class="button" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <!-- search option end -->
        </div>
        <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                    <!-- start single post -->
                    @foreach($recentPosts as $post)

                        <div class="recent-single-post">
                           <div class="post-img">
                              <a href="blog/posts/{{$post->id}}">
                                  <img src="{{$post->image}}" alt="">
                              </a>
                           </div>
                           <div class="pst-content">
                              <p><a href="blog/posts/{{$post->id}}"> {{$post->title}}</a></p>
                           </div>
                        </div>
                    @endforeach
                    <!-- End single post -->
                </div>
            </div>
            <!-- recent end -->
        </div>
        <div class="single-blog-page">
            <div class="left-blog">
                <h4>categories</h4>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="blog/?category={{ $category }}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="single-blog-page">
            <div class="left-blog">
                <h4>archive</h4>
                <ul>
                    <li>
                        <a href="#">07 July 2016</a>
                    </li>
                    <li>
                        <a href="#">29 June 2016</a>
                    </li>
                    <li>
                        <a href="#">13 May 2016</a>
                    </li>
                    <li>
                        <a href="#">20 March 2016</a>
                    </li>
                    <li>
                        <a href="#">09 Fabruary 2016</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="single-blog-page">
            <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                        @foreach($tags as $tag)
                            <li>
                                <a href="blog/?tag={{ $tag }}">{{$tag->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End left sidebar -->
