<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="row wesome-project-1 fix">
            <!-- Start Portfolio -page -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul id="portfolio-filters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($categories as $category)
                        <li class="portfolio-item">
                        <a href="home/?category={{ $category->slug }}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row awesome-project-content portfolio-container">

            <!-- portfolio-item start -->
            @unless(count($portfolios)==0)
            @foreach($portfolios as $portfolio)
            <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                <div class="single-awesome-project">
                    <div class="awesome-img">
                        <a href="#"><img src="{{ $portfolio->image }}" alt="" /></a>
                        <div class="add-actions text-center">
                            <div class="project-dec">
                                <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                                    <h4>{{ $portfolio->name }}</h4>
                                    <span>{{ $portfolio->description }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
                <p>No Portfolios Found...</p>
        @endunless
            <!-- portfolio-item end -->
        </div>
    </div>
</div><!-- End Portfolio Section -->
