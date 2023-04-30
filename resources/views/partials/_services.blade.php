<!-- ======= Services Section ======= -->
<div id="services" class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <!-- Start Left services -->
            @foreach($services as $service)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="about-move">
                    <div class="services-details">
                        <div class="single-services">
                            <a class="services-icon" href="#">
                                <i class="bi bi-briefcase"></i>
                            </a>
                            <h4>{{ $service->name }}</h4>
                            <p>
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                    <!-- end about-details -->
                </div>
            </div>
            @endforeach
                </div>
            </div>
</div><!-- End Services Section -->
