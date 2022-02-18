<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>KOMISARIAT Se-Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Komisariat</li>
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
                <div class="section-title mt-50">
                    <h5>KOMISARIAT HMI</h5>
                    <h4>Se-Cabang Ponorogo</h4>
                </div> <!-- section title -->
                <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12">
                            <div class="blog-details mt-30">
                               <div class="blog-comment">
                                   <ul>
                                       <li>
                                        @foreach ($komisariats as $komisariat)
                                           <div class="comment" style="padding: 9px 0px 9px 0px;">
                                               <div class="comment-author">
                                                    <div class="author-thum" style="width: 70px;">
                                                        <img src="{{asset('assets/images/artikel')}}/{{$komisariat->image }}" alt="Reviews">
                                                    </div>
                                                    <div class="comment-name">
                                                        <h6 style="padding-bottom: 20px;">{{$komisariat->name}}</h6>
                                                        <ul>
                                                            <li><a href="{{$komisariat->fb}}"><i class="fa fa-facebook-f"></i> Facebook</a>
                                                                &emsp;&emsp;&emsp;<a href="{{$komisariat->ig}}"><i class="fa fa-instagram"></i> Instagram</a></li>

                                                            <li><a href="{{$komisariat->wa}}"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                                                                &emsp;&emsp;&ensp;<a href="{{$komisariat->web}}"><i class="fa fa-globe"></i> Website</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-name">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!-- comment -->
                                            @endforeach
                                       </li>
                                   </ul>   
                               </div> <!-- blog comment -->
                            </div> <!-- blog details -->
                       </div>
                   </div> <!-- row -->
               </div>
            </div> <!-- about cont -->
            <div class="col-lg-6">
                <div class="section-title mt-50">
                    <h5>KETUA UMUM KOMISARIAT</h5>
                    <h4>HMI Se-Cabang Ponorogo</h4>
                </div> <!-- section title -->
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="saidbar-post" style="padding: 20px 0 20px;">
                               <ul>
                                @foreach ($ketuakoms as $ketuakom)
                                   <li style="border-bottom: 3px solid #d2d2d2; padding-bottom: 5px;">
                                        <a href="">
                                            <div class="singel-post">
                                               <div class="thum" style="width: 68px;">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$ketuakom->image }}" alt="artikel">
                                                </div>
                                               <div class="cont" style="padding-left: 5px;">
                                                   <h6>Ketua Umum {{$ketuakom->komisariat->name}}</h6>
                                                   <p>{{$ketuakom->name}}</p>
                                                   <span>{{$ketuakom->Ket}}</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   @endforeach
                               </ul>
                           </div> <!-- saidbar post -->
                       </div>
                   </div> <!-- row -->
               </div> <!-- saidbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

