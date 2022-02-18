<section id="slider-part" class="slider-active">
    @foreach ($sliderhome as $sh)
    <div class="single-slider bg_cover pt-40" style="background-image: url('{{asset('assets/images/artikel')}}/{{$sh->image }}')" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">{{$sh->name }}</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">{{$sh->description }}</p>
                        <ul>
                            <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ route('home.detail',['slug'=>$sh->slug])}}">Selengkapnya</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
     @endforeach
</section>
    <section id="event-singel" class="pt-20 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>{{$sliderhomes->name }}</h3>
                            <a href="#"><span><i class="fa fa-calendar"></i> {{$sliderhomes->created_at }} </span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i> {{$sliderhomes->tempat }}</span></a>
                            <img src="{{asset('assets/images/artikel')}}/{{$sliderhomes->image }}" alt="Event">
                            <p>{{$sliderhomes->content }}</p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(images/event/singel-event/coundown.jpg)">
                                <div data-countdown="2020/03/12"></div>
                                <div class="events-coundwon-btn pt-30">
                                    <a href="#" class="main-btn">Book Your Seat</a>
                                </div>
                            </div> <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Start Time</h6>
                                                <span>12:00 Am</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Finish Time</h6>
                                                <span>05:00 Am</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Address</h6>
                                                <span>{{$sliderhomes->tempat }}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                                <div id="contact-map" class="mt-25"></div> <!-- Map -->
                            </div> <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>