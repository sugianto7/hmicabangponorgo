<div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 pb-10 mb-10">
            <article class="post pb-10">
              <div class="entry-header">    
                <div class="owl-carousel-1col" data-nav="true"> @foreach ($sliderhome as $sh)            
                  <div class="item bg-img-cover" style="background-image: linear-gradient(to bottom, rgba(0 0 0 / 61%) 0%,rgba(0,0,0,0.85) 100%) , url('{{asset('assets/images/artikel')}}/{{$sh->image }}'); background-position: 50% 50%; background-repeat: no-repeat;background-size: cover;">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-9">
                              <div class="pb-50 pt-50 p-15 bg-white-transparent">
                                <a href="{{ route('home.detail',['slug'=>$sh->slug])}}" class="text-uppercase font-titillium font-weight-600 mb-0 font-15">{{strlen($sh->name) > 55 ? substr($sh->name,0,55) : $sh->name}}</a><br style="">
                                <p href="#" class="mt-5 pr-20" style="color: yellow;">{{$sh->created_at}}</p> 
                                <b class="font-13 text-white">{!!strlen($sh->description) > 79 ? substr($sh->description,0,79) : $sh->description!!}...</b>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>@endforeach
                </div>
              </div>              
            </article>
            <div class="row">
              <div class="col-md-12">
                <h4 class="widget-title title-dots"><span>World News</span></h4>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-7">@foreach ($popular_blogs as $p_blogs)
                <article class="post media-post clearfix pb-0 mb-10" style="border-bottom: 1px solid #ececec;">
                  <a class="post-thumb" href="{{ route('livewire.artikel-single',['slug'=>$p_blogs->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$p_blogs->image }}" alt="" width="121" height="111"></a>
                  <div class="post-right">
                    <h6 class="entry-title text-uppercase mt-0 mb-5"><a href="{{ route('livewire.artikel-single',['slug'=>$p_blogs->slug])}}">{{strlen($p_blogs->name) > 55 ? substr($p_blogs->name,0,55) : $p_blogs->name}}</a></h6>
                    <p class="post-date" style="margin: 0; font-size: 9px;"><b style="color: green;">{{$p_blogs->kategori->name}}</b> | {{$p_blogs->updated_at}} WIB</p>
                    <p class="font-12">{!!strlen($p_blogs->short_description) > 70 ? substr($p_blogs->short_description,0,70) : $p_blogs->short_description!!}...</p>
                  </div>                                           
                </article>@endforeach    
              </div>
              <div class="col-xs-12 col-sm-6 col-md-5" >@foreach ($artikelses as $artikel)
                <article class="post media-post clearfix pb-0 mb-10"  style="border-bottom: 1px solid #ececec;">
                  <a class="post-thumb" href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt="" width="88" height="88"></a>
                  <div class="post-right ">
                    <h6 class="post-title mt-0 mb-5"><a href="{{ route('livewire.artikel-single',['slug'=>$artikel->slug])}}">{{strlen($artikel->name) > 120 ? substr($artikel->name,0,120) : $artikel->name}}.</a></h6>
                    <p class="post-date mb-10 font-12"><b style="color: green;">{{$artikel->kategori->name}}</b> | {{$artikel->created_at}}</p>
                  </div>
                </article>@endforeach 
                {{$artikelses->links()}}  
              </div>         
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4 class="widget-title title-dots mt-30"><span>Baca Juga</span></h4>
              </div>  @foreach ($baca_juga as $bj)   
              <div class="col-xs-12 col-sm-6 col-md-6">             
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="{{ route('livewire.artikel-single',['slug'=>$bj->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$bj->image }}" alt="" width="185" height="145"></a>
                  <div class="post-right">
                    <h5 class="entry-title text-uppercase mt-0 mb-5"><a href="{{ route('livewire.artikel-single',['slug'=>$bj->slug])}}">{{strlen($bj->name) > 36 ? substr($bj->name,0,36) : $bj->name}}</a></h5>
                    <p class="post-date mb-10 font-12">{{strlen($bj->penulis->name) > 5 ? substr($bj->penulis->name,0,5) : $bj->penulis->name}} |{{$bj->created_at}}</p>
                    <p>{{strlen($bj->short_description) > 61 ? substr($bj->short_description,0,61) : $bj->short_description}}</p>
                  </div>
                </article>
              </div>
                @endforeach 
            </div>
            <div class="row">
              <div class="col-md-12">                  
                <h4 class="widget-title title-dots mt-30"><span>Galeri Kegiatan</span></h4>
              </div>
                <section id="home" class="divider">
                  <div class="container-fluid pt-0 pb-0">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="owl-carousel-4col">@foreach ($galeries as $galeri)
                          <div class="item">
                            <div class="featured-blog">
                              <img src="{{asset('assets/images/artikel')}}/{{$galeri->image }}" alt="galeri kegiatan">
                              <div class="featured-blog-details">
                                <h4 class="text-white">{{$galeri->name}}</h4>
                                <p class="text-white">{{$galeri->tempat }} {{$galeri->created_at }}</p>
                                <a href="#" class="btn btn-theme-colored btn-sm mt-5">read more</a> 
                              </div>
                            </div>
                          </div>@endforeach 
                        </div> 
                      </div>
                    </div>
                  </div>
                </section>                  
            </div>      
          </div>
        <div class="col-sm-12 col-md-3">
            <div class="widget">
                <h5 class="widget-title title-dots small"><span>Search box</span></h5>
                <div class="search-form">
                  <form>
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
            </div>
            <div class="widget" >
                <h5 class="widget-title title-dots small"><span>Top News</span></h5>
                <div class="latest-posts"><?php $no = 1; ?>@foreach ($top_news as $t_n)
                  <article class="post media-post clearfix pb-0 mb-5" style="background-color: #04ff29;">
                    <a class="post-thumb" href="#" style="padding: 0 0px 0 13px; "><h4 style="font-size: 31px;">0{{$no++}}</h4></a>
                    <div class="post-right">
                      <h5 class="post-title mt-5" style="margin-bottom: 0; padding-right: 6px"><a href="{{ route('livewire.artikel-single',['slug'=>$t_n->slug])}}">{{strlen($t_n->name) > 70 ? substr($t_n->name,0,70) : $t_n->name}}.</a></h5>
                      <p class="post-date mb-5 font-12"><b style="color: white;">Posted</b> | {{$t_n->created_at}}</p>
                    </div>
                  </article>@endforeach  
                </div>
            </div>
            <div class="widget">
                <img class="img-fullwidth" src="{{ asset('portal/images/magazine/banner-ads2.jpg')}}" alt="">
            </div>
            <div class="widget">
                <h5 class="widget-title title-dots small"><span>Kategori Post</span></h5>
                <div id="flickr-feed" class="clearfix">@foreach ($kategory as $ktg)
                    <article class="post media-post clearfix pb-0 mb-5" style="border-bottom: 1px solid #ececec;">
                    <div class="post-right">
                      <h4 class="post-title mt-0" style="margin-bottom: 0;"><a href="{{route('artikel.kategory',['category_slug'=>$ktg->slug]) }}" style=" font-size:15px ;">{{$ktg->name}}</a><b style="float: right; margin-right: 12px; font-size: 21px;">{{$ktg->blog_count}}</b></h4>
                    </div>
                  </article>
                  @endforeach
                </div>
            </div>

            <div class="widget">
                <h5 class="widget-title title-dots small"><span>Komisariat</span></h5>
                <div class="owl-carousel-1col">@foreach ($ketuakoms as $ketuakom)
                  <div class="item">
                    <img src="{{asset('assets/images/artikel')}}/{{$ketuakom->komisariat->image }}" alt="" width="auto" height="155">
                    <h4 class="title text-center"  style="margin-bottom: 0;"><a href="#">{{$ketuakom->komisariat->name}}</a></h4>
                    <p class="text-center" >{{$ketuakom->name}} ( Ketua Umum )</p>
                  </div>@endforeach                  
                </div>
            </div> 
            <div class="widget">
                <h5 class="widget-title title-dots small"><span>Kolom</span></h5>
                <div class="latest-posts">@foreach ($penulis as $pen)
                  <article class="post media-post clearfix pb-0 mb-5" style="border-bottom: 1px solid #ececec;">
                    <a class="post-thumb" href="{{route('artikel.penulis',['penulis_slug'=>$pen->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$pen->image }}" alt="" width="55" height="auto"></a>
                    <div class="post-right">
                      <h4 class="post-title mt-0" style="margin-bottom: 0;"><a href="{{route('artikel.penulis',['penulis_slug'=>$pen->slug])}}" style=" font-size:15px ;">{{$pen->name}}</a></h4>
                      <p>Jumlah Postingan <b style="float: right; margin-right: 12px; font-size: 21px;">{{$pen->blog_count}}</b></p>
                    </div>
                  </article>@endforeach
                </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
</div>
