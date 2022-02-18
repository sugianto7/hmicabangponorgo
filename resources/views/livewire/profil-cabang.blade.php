<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Profil HMI Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="teachers-singel" class="pt-20 pb-50 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    @foreach($profils as $profil)
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{asset('assets/images/artikel')}}/{{$profil->image }}" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6>{{$profil->name}}</h6>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <p style="text-align : justify;">{{$profil->short_description}}</p>
                        </div>
                    </div> <!-- teachers left -->
                    @endforeach
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Profil HmI</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    @foreach($profils as $profil)
                                    <div class="singel-dashboard pt-40">
                                        <h5>Profil HmI </h5>
                                        <p>{!! $profil->description !!}</p>
                                    </div> <!-- singel dashboard -->
                                    @endforeach
                                </div> <!-- dashboard cont -->
                            </div>

                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
                                    <div class="row">
                                        @foreach ($galeries as $galeri)
                                        <div class="col-md-6">
                                            <div class="singel-course mt-30">
                                                <div class="thum">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/artikel')}}/{{$galeri->image }}" alt="Course">
                                                    </div>
                                                </div>
                                                <div class="cont border" style="padding: 9px;">
                                                    <span>{{$galeri->created_at }}</span>
                                                    <a href="#"><h4 style="padding: 4px;">{{$galeri->name }}</h4></a>
                                                    <div class="course-teacher">
                                                        <div class="name">
                                                            <a href="#"><h6>{{$galeri->ket }}</h6></a>
                                                            <span>{{$galeri->tempat }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- singel course -->
                                        </div>
                                        @endforeach
                                    </div> <!-- row -->
                                </div> <!-- courses cont -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-cont">
                                    <div class="title">
                                        <h6>Student Reviews</h6>
                                    </div>
                                    <ul>
                                       <li>
                                           <div class="singel-reviews">
                                            @foreach ($artikels as $artikel)
                                                <div class="reviews-author">
                                                    <div class="author-thum" style="width: 150px;" >
                                                        <a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt="Reviews"></a>
                                                    </div>
                                                    <div class="author-name">
                                                         <h6>Oleh : {{$artikel->penulis->name}}</h6>
                                                        <span>{{$artikel->created_at}} WIB</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}"><h6>{{$artikel->name}}</h6>
                                                    <p>{!! $artikel->short_description !!}</p></a>
                                                </div>
                                                @endforeach
                                            </div> <!-- singel reviews -->
                                       </li>
                                    </ul>
                                </div> <!-- reviews cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

                        