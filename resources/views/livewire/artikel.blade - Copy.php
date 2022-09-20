<div class="main-content">



<!--====== BLOG PART START ======-->

<section id="blog-page" class="pb-10 gray-bg" style="border-top: 40px black;">
    <div class="container">
       <div class="row">
           <div class="col-lg-8">
               <div class="saidbar">
                
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post mt-30">
                               <h4 style="border-bottom: 3px solid;">Artikel & Opini</h4>
                               <ul>
                                @foreach ($artikelses as $artikel)
                                   <li style="border-bottom: 3px solid #d2d2d2; padding-bottom: 5px;">
                                        <a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}">
                                            <div class="singel-post">
                                               <div class="thum">
                                                   <img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt="artikel">
                                                </div>
                                               <div class="cont">
                                                   <h6>{{$artikel->name}}</h6>
                                                   <p>{!! $artikel->short_description !!}...</p>
                                                   <span><b style="color: #07294d">{{$artikel->kategori->name}}</b> <b>|</b> {{$artikel->updated_at}}</span>
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
               <nav class="wrap-pagination-info">
                    <ul class="pagination justify-content-lg-end justify-content-center">
                        <li class="wrap-pagination-info">

                            {{$artikelses->links()}}
                        
                        </li>
                    </ul>
                </nav>
                <br>
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

                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="video-container">
                        <iframe width="420" height="315" src="//www.youtube.com/embed/UEUcryy0spI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

           </div>
           <div class="col-lg-4">
               <div class="saidbar">
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-search mt-30">
                               <form action="#">
                                   <input type="text" placeholder="Search">
                                   <button type="button"><i class="fa fa-search"></i></button>
                               </form>
                           </div> <!-- saidbar search -->
                           
                                
                           <div class="categories mt-30">
                               <h4>Kategori</h4>
                               <ul>
                                @foreach ($kategory as $ktg)
                                   <li><a href="{{route('artikel.kategory',['category_slug'=>$ktg->slug]) }}"><b>{{$ktg->name}}</b></a><span style="float: right;"><b>{{$ktg->blog_count}}</b></span>
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
                                                   <p>Jumlah Post <b style="float: right;">{{$p_blogs->blog_count}}</b></p>
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