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
                @php
                    // Get the posts made in the past month ordered by their creation date
                    $postsInPastMonth = \App\Models\Post::whereBetween('created_at', [now()->subMonth()->startOfMonth(), now()->startOfMonth()])
                                                         ->orderBy('created_at', 'desc')
                                                         ->get();

                    // Get the posts made in the past year ordered by their creation date
                    $postsInPastYear = \App\Models\Post::whereBetween('created_at', [now()->subYear()->startOfYear(), now()->startOfYear()])
                                                       ->orderBy('created_at', 'desc')
                                                       ->get();
                @endphp
                <ul>
                    <li>
                        <h6>Posts made in the past month:</h6>
                        @foreach ($postsInPastMonth as $post)
                            <a href="/blog/posts/{{ $post->id }}">{{ $post->created_at->format('M j, Y') }}</a>
                        @endforeach

                        <h6>Posts made in the past year:</h6>
                        @foreach ($postsInPastYear as $post)
                            <a href="/blog/posts/{{ $post->id }}">{{ $post->created_at->format('M j, Y') }}</a>
                        @endforeach
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
