<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Pengurus HMI Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengurus</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="publication-part" class="pt-35  gray-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-10 col-md-8 col-sm-7">
                    @foreach ($priode_name as $p_name)
                <div class="section-title pb-20">
                    <h5 style="font-size: 30px;"> Struktur Pengurus</h5>
                    <h2>HMI Cabang Ponorogo {{$p_name->name}} </h2>
                </div> <!-- section title -->
                @endforeach
            </div>
            <div class="col-lg-2 col-md-4 col-sm-5">
                <div class="products-btn text-right pb-20">
                    <a href="{{ route('struktur-kepengrusan-detail') }}" class="main-btn">Detail Struktur</a>
                </div> <!-- products btn -->
            </div>
            <section id="teachers-page" class=" pb-120 gray-bg">
                <div class="container">
                   <div class="row">
                     @foreach ($strukturs as $struktur)
                       <div class="col-lg-3 col-sm-6">
                           <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('assets/images/artikel')}}/{{$struktur->image }}" alt="Teachers">
                                </div>
                                <div class="cont" style="background-color: #025608;">
                                    <a href="#"><h6 style="color: white; border-bottom: 2px solid white;">{{$struktur->name }}</h6></a>
                                    <span style="color: #ffebbe;">{{$struktur->jabatan }}</span>
                                </div>
                            </div> <!-- singel teachers -->         
                       </div>
                       @endforeach
                   </div> <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="wrap-pagination-info">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        {{$strukturs->links()}}
                                    </li>
                                </ul>
                            </nav>  <!-- courses pagination -->
                        </div>
                    </div>  <!-- row -->
                </div> <!-- container -->
            </section>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

            