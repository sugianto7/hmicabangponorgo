<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('{{ asset('base/images/page-banner-4.jpeg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>{{$kategori_name}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$kategori_name}}</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->


<!--====== BLOG PART START ======-->

<section id="blog-page" class="pb-10 gray-bg" style="border-top: 40px black;">
    <div class="container">
       <div class="row">
           <div class="col-lg-8">
               <div class="saidbar">
                
                   <div class="row">
                       <div class="col-lg-12 col-md-6">
                           <div class="saidbar-post mt-30">
                               <h4 style="border-bottom: 3px solid #d2d2d2;">{{$kategori_name}}</h4>
                               <ul>
                                @foreach ($artikels as $artikel)
                                   <li style="border-bottom: 3px solid; padding-bottom: 5px;">
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
                           </div> <!-- saidbar post -->
                       </div>
                   </div> <!-- row -->
                   
               </div> <!-- saidbar -->
               <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-lg-end justify-content-center">
                        <li class="page-item">

                            {{$artikels->links()}}
                        
                        </li>
                    </ul>
                </nav>  <!-- courses pagination -->
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
                                   <li><a href="{{route('artikel.kategory',['category_slug'=>$ktg->slug]) }}"><b>{{$ktg->name}}</b></a><span style="float: right;">{{$ktg->blog_count}}</span>
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
                   </div> <!-- row -->
               </div> <!-- saidbar -->
           </div>
       </div> <!-- row -->
    </div> <!-- container -->
</section>