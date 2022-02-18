<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Struktur Pengurus HMI Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">StrukturPengurus</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="about-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @foreach ($imgs as $img)
                <div class="section-title mt-50">
                    <h5>Struktur Pengurus Cabang</h5>
                    <h4>HMI CABANG PONROGO {{$img->priode->name}}</h4>
                </div> <!-- section title -->
                <div class="about-cont">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/artikel')}}/{{$img->image }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href=""><h6>SRTUKTUR PENGURUS HMI CABANG PONOROGO</h6></a>
                            <span>{{$img->priode->name}}</span>
                        </div>
                    </div> <!-- singel teachers -->
                </div>
                @endforeach
            </div> <!-- about cont -->
            <div class="col-lg-6">
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="saidbar-post" style="padding: 20px 0 20px;">
                               <ul>
                                @foreach ($strukturs as $struktur)
                                   <li style="border-bottom: 3px solid #d2d2d2; padding-bottom: 5px;">
                                        <a href="">
                                            <div class="singel-post">
                                               <div class="thum" style="width: 86px;">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$struktur->image }}" alt="artikel">
                                                </div>
                                               <div class="cont" style="padding-left: 5px;">
                                                   <h6>{{$struktur->ket}}</h6>
                                                   <p>{{$struktur->name}}</p>
                                                   <span>{{$struktur->jabatan}}</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   @endforeach
                               </ul>
                           </div>
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
                    </div> <!-- saidbar post -->
                       </div>
                   </div> <!-- row -->
               </div> <!-- saidbar -->
            </div>
    <!--             <div class="about-bg">
                    <img src="{{asset('assets/images/artikel')}}/{{$img->image }}" alt="About">
                </div> -->
        </div> <!-- row -->
    </div> <!-- container -->
</section>
            