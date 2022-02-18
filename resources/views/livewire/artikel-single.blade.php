@extends('layouts.artikel')

@section("title")
<meta property="og:title" content="{{$artikel->name}}">
@endsection
@section("meta")
    
<meta property="og:site_name" content="{{$artikel->name}}">
<meta property="og:title" content="{{$artikel->name}}" />
<meta property="og:description" content="{{$artikel->description}}" />
<meta property="og:image" itemprop="image" content="{{asset('assets/images/artikel')}}/{{$artikel->image }}">
<meta property="og:image:type" content="image/jpeg/png" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1440432930" />
@endsection
@section('content')
<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('{{ asset('base/images/page-banner-4.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>HMI Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">HMI Cabang Ponorogo</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
<section id="blog-singel" class="pt-10 pb-120 gray-bg">
    <div class="container">
       <div class="row">
          <div class="col-lg-8">
              <div class="blog-details pb-50">                   
                  <div class="cont">
                    <h3><a href="">{{$artikel->name}}</a></h3>
                    <p>{{$artikel->created_at}} WIB</p> 
                    <ul class="share">
                           <li class="title">Share :</li>
                           <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                       </ul>
                    <div class="thum">
                      <img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt="Blog Details">
                    </div>                     
                        <ul>                              
                           <a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}"><b>Penulis : </b> {{$artikel->penulis->name}}</a>&nbsp;&nbsp;&nbsp; |
                           <a><b>Editor : </b> {{$artikel->editor}}</a>&nbsp;    
                       </ul>
                       <p>{!! $artikel->description !!}
                       </p>
                       <ul class="share">
                           <li class="title">Share :</li>
                           <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                       </ul>
                       <div class="blog-comment pt-45">
                           <div class="title pb-15">
                               <h3>{{@$jml_komentar}} Komentar</h3>
                           </div>  <!-- title -->
                           <style>
                                .display-comment .display-comment {
                                    margin-left: 40px
                                }
                            </style>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">                                      
                                        <div class="card">
                                            <div class="card-body">                                      
                                            @include('livewire.pertials.replys', ['komentars' => $artikel->komentars, 'artikel_id' => $artikel->id])
                                            <hr />
                                            </div>
                                            <div class="card-body">
                                            <h5>Silahkan Komentar Dibawah</h5>
                                                <form method="post" action="{{ route('comment.add') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea type="text" name="komentar" class="form-control" style="height: 150px;" /></textarea>
                                                        <input type="hidden" name="artikel_id" value="{{ $artikel->id }}" />
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-outline-success" style="font-size: 0.8em;" value="Add Komentar" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- blog comment -->
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
                    <br>
                    <br>
                        <div class="col-lg-8">
                            <div class="video-container">
                            <iframe width="420" height="315" src="//www.youtube.com/embed/{{$artikel->status}}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <br>
                    </div> <!-- cont -->
                </div> <!-- blog details -->
                <section id="course-part" class="white-bg" style="padding: 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title pb-45">
                                    <h2 style="border-bottom: 3px solid;">Related Post </h2>
                                </div> <!-- section title -->
                            </div>
                        </div> <!-- row -->
                        <div class="row course-slied mt-30">
                            @foreach ($related_blogs as $r_blogs)
                            <div class="col-lg-4">  
                                <div class="singel-course">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{asset('assets/images/artikel')}}/{{$r_blogs->image }}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="cont" style="padding: 5px;">
                                        <a href="{{ route('livewire.artikel-single',['slug'=>$r_blogs->slug])}}"><h6>{{$r_blogs->name}}</h6></a>
                                            <span>{{$r_blogs->created_at}} WIB</span></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="{{asset('assets/images/artikel')}}/{{$r_blogs->penulis->image }}" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>{{$r_blogs->penulis->name }}</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- singel course -->  
                            </div>
                            @endforeach
                        </div> <!-- course slied -->  
                    </div>
                </section>

                <br>
          </div>
           <div class="col-lg-4">
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-search">
                               <form action="#">
                                   <input type="text" placeholder="Search">
                                   <button type="button"><i class="fa fa-search"></i></button>
                               </form>
                           </div> <!-- saidbar search -->
                           <div class="categories mt-30">
                               <h4>Kategori</h4>
                               <ul>
                                @foreach ($kategori as $ktg)
                                   <li><b><a href="{{route('artikel.kategory',['category_slug'=>$ktg->slug]) }}">{{$ktg->name}}</a></b><span style="float: right;">{{$ktg->blog_count}}</span>
                                   </li>
                                   @endforeach
                               </ul>
                           </div>
                       </div> <!-- categories -->
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post mt-30">
                               <h4>Popular Posts</h4>
                               <ul>
                                   @foreach ($popular_blogs as $p_blogs)
                                   <li>
                                        <a href="{{ route('livewire.artikel-single',['slug'=>$p_blogs->slug])}}">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$p_blogs->image }}" alt="Blog">
                                                </div>
                                               <div class="cont">
                                                   <h6>{{$p_blogs->name}}</h6>
                                                   <span>{{$p_blogs->updated_at}}</span>
                                               </div>
                                           </div> <!-- singel post -->
                                        </a>
                                   </li>
                                   @endforeach
                               </ul>
                           </div> <!-- saidbar post -->
                       </div>
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post mt-30">
                               <h4>KOLOM</h4>
                               <ul>
                                @foreach ($penulis as $p)
                                   <li>
                                        <a href="{{route('artikel.penulis',['penulis_slug'=>$p->slug])}}">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$p->image }}" alt="Blog" style="border-radius: 100px;">
                                               </div>
                                               <div class="cont">
                                                   <h6>{{$p->name}}</h6>
                                                   <span>{{$p->created_at}}</span>
                                                   <p>Jumlah Post <b style="float: right;">{{$p->blog_count}}</b></p>
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

@endsection 
@section("footer")
<div>
            <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="/">Copy Right @ReogIO</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           <img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}">
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
</div>
@endsection