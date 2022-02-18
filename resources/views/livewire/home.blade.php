    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form id="sfrom" action="{{route('search') }}" method="post">
                <input type="text" id="q" name="q" placeholder="Search by keyword">
                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
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

<!--====== SLIDER PART ENDS ======-->

<!--====== CATEGORY PART START ======-->


<!--====== CATEGORY PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                @foreach ($tentangs as $tentang)
                <div class="section-title mt-50">
                    <h5>Tentang</h5>
                    <h4>{{$tentang->judul}}</h4>
                </div> <!-- section title -->
                <div class="about-cont">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{asset('assets/images/artikel')}}/{{$tentang->image }}" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-singel.html"><h6>{{$tentang->name}}</h6></a>
                            <span>{{$tentang->nama_ketua}}</span>
                        </div>
                    </div> <!-- singel teachers -->
                    <p>{{$tentang->short_description}}</p>
                    <a href="{{ route('tentang',['slug'=>$tentang->slug])}}" class="main-btn mt-55">Baca Selengkapnya</a>
                </div>
                @endforeach
            </div> <!-- about cont -->
            <div class="col-lg-6 offset-lg-1">
                <div class="about-event mt-50">
                    <div class="event-title">
                        <h3>Agenda Kegiatan</h3>
                    </div> <!-- event title -->
                    <ul>
                        @foreach ($kegiatan as $kg)
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> {{$kg->tanggal}}</span>
                                <a href="events-singel.html"><h4>{{$kg->name}}</h4></a>
                                <span><i class="fa fa-clock-o"></i>{{$kg->waktu}}</span>
                                <span><i class="fa fa-map-marker"></i>{{$kg->tempat}}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul> 
                </div> <!-- about event -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-bg">
        <img src="{{asset('assets/images/artikel')}}/{{$tentang->image }}" alt="About">
    </div>
</section>

<!--====== ABOUT PART ENDS ======-->


<!--====== COURSE PART START ======-->

<section id="course-part" class="pt-35 pb-40 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                @foreach ($priode_name as $p_name)
                <div class="section-title pb-45">
                    <h5>Pengurus</h5>
                    <h2>HMI Cabang Ponorogo {{$p_name->name}} </h2>
                </div> <!-- section title -->
                @endforeach
            </div>
        </div> <!-- row -->
        
        <div class="row course-slied mt-30">
            @foreach ($strukturs as $struktur)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset('assets/images/artikel')}}/{{$struktur->image }}" alt="teacher">
                        </div>
                    </div>
                    <div class="cont" style="padding: 5px; text-align: center;">
                        <a href="/struktur-kepengrusan"><h4 style="padding-bottom: 5px;">{{$struktur->name }}</h4></a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="#"></a>
                            </div>
                            <div class="name">
                                <a href="/struktur-kepengrusan"><h6>{{$struktur->jabatan }}</h6></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>

<!--====== COURSE PART ENDS ======-->


<!--====== NEWS PART START ======-->

<section id="news-part" class="pt-35 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title pb-10">
                    <h2 style="border-bottom: 3px solid;">Artikel & Opini Populer</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

       <div class="row">
           <div class="col-lg-8">
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post">
                               <ul>
                                   <ul>
                                @foreach ($artikels as $artikel)
                                   <li style="border-bottom: 3px solid #d2d2d2; padding-bottom: 5px;">
                                        <a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt="artikel">
                                                </div>
                                               <div class="cont">
                                                   <h6>{{$artikel->name}}</h6>
                                                   <p>{!! $artikel->short_description !!}...</p>
                                                   <span>{{$artikel->kategori->name}} <b>|</b> {{$artikel->updated_at}}</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   @endforeach
                               </ul>
                               </ul>
                           </div> <!-- saidbar post -->
                       </div>
                   </div> <!-- row -->
               </div> <!-- saidbar -->
           </div>
           <div class="col-lg-4">
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="categories mt-30">
                               <h4>Kategori</h4>
                               <ul>
                                   @foreach ($kategory as $ktg)
                                   <li><a href="{{route('artikel.kategory',['category_slug'=>$ktg->slug]) }}">{{$ktg->name}}</a><span style="float: right;"><b>{{$ktg->blog_count}}</b></span>
                                   </li>
                                   @endforeach
                               </ul>
                           </div>
                       </div> <!-- categories -->
                   </div> <!-- row -->
               </div> <!-- saidbar -->
           </div>
       </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== NEWS PART ENDS ======-->

<!--====== PUBLICATION PART START ======-->
    <style>
        .video-container {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 30px;
  height: 0;
  overflow: hidden;
}
 
.video-container iframe, .video-container object, .video-container embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
    </style>
    <section id="publication-part" class="pt-35 pb-50 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="video-container">
                    <iframe width="420" height="315" src="//www.youtube.com/embed/UEUcryy0spI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<!--====== PUBLICATION PART ENDS ======-->

@push('scripts')
<script type="text/javascript">
 var path = "{{route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source: function(query,process){
            return $.get(path,{query:query},function(data){
                return process(data);
            });
        }
    });

            $(document).ready(function(){
                $('input.typeahead').change(function(){
                    $('sfrom').submit();
                })
            });
</script>
@endpush