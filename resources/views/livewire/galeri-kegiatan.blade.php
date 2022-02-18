<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Galeri</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="course-part" class="pt-35 pb-40 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                @foreach ($priode_name as $p_name)
                <div class="section-title pb-45">
                    <h5>Galeri Kegiatan</h5>
                    <h2>HMI Cabang Ponorogo {{$p_name->name}} </h2>
                </div> <!-- section title -->
                @endforeach
            </div>
        </div> <!-- row -->
        
        <div class="row course-slied mt-30">
            @foreach ($galeries as $galeri)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset('assets/images/artikel')}}/{{$galeri->image }}" alt="teacher">
                        </div>
                    </div>
                    <div class="cont" style="padding: 5px; text-align: center;">
                        <h6>{{$galeri->created_at }}</h6>
                        <a href="/galeri-kepengrusan"><h4 style="padding: 3px;">{{$galeri->name }}</h4></a>
                        <div class="course-teacher">
                            <div class="name">
                                <a href="/galeri-kepengrusan"><h6>{{$galeri->tempat }}</h6></a>
                                <p>{{$galeri->ket }}</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>
<section id="course-part" class="pb-40 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="section-title pb-45">
                    <h5>Galeri Kegiatan</h5>
                    <h2>Dokumenter HMI Cabang Ponorogo</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->     
        <div class="row course-slied mt-30">
            @foreach ($gleris as $gleri)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset('assets/images/artikel')}}/{{$gleri->image }}" alt="teacher">
                        </div>
                    </div>
                    <div class="cont" style="padding: 5px; text-align: center;">
                        <h6>{{$gleri->created_at }}</h6>
                        <a href="/galeri-kepengrusan"><h4 style="padding: 3px;">{{$gleri->name }}</h4></a>
                        <div class="course-teacher">
                            <div class="name">
                                <a href="/galeri-kepengrusan"><h6>{{$gleri->tempat }}</h6></a>
                                <p>{{$gleri->ket }}</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>