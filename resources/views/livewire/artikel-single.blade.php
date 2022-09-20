
@section("title")
<meta property="og:title" content="Pers | {{$artikel->name}}">
@endsection
@section("meta")
    
<meta property="og:site_name" content="{{$artikel->name}}">
<meta property="og:title" content="Pers | {{$artikel->name}}" />
<meta property="og:description" content="{{$artikel->short_description}}" />
<meta property="og:image" itemprop="image" content="{{asset('assets/images/artikel')}}/{{$artikel->image }}">
<meta property="og:image:type" content="image/jpeg/png" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:type" content="website" />
<meta property="og:updated_time" content="1440432930" />
@endsection

<div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 pb-10 mb-10">
            <div class="row">
              <div class="col-md-12">
                <h4 class="widget-title title-dots" style="margin-top: 0;"><span>HMI News</span></h4>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <article class="post pb-3">
                  <div class="entry-content" style="padding-bottom: 0;">
                    <h4 class="entry-title mt-0"><a href="#" style="text-align: justify;">{{$artikel->name}} </a></h4>
                    <ul class="list-inline font-12 mb-2 mt-10">
                      <li><i class="fa fa-calendar text-theme-color-2 mr-1"></i> {{$artikel->updated_at}} WIB </li>
                      <li><i class="fa fa-comments-o text-theme-color-2 ml-5 mr-5"></i>{{@$jml_komentar}} comments</li>
                    </ul>
                    <div class="mt-10 mb-0">
                        <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                        <ul class="styled-icons icon-circled m-0">
                          <li><a href="whatsapp://send?text=https://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/whatsapp/share" data-bg-color="#48c257"><i class="fa fa-whatsapp text-white"></i></a></li>
                          <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/facebook/share" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                          <li><a href="instagram://send?text=https://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/instagram/share" data-bg-color="#A11312"><i class="fa fa-instagram text-white"></i></a></li>
                        </ul>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="entry-content">
                    <div class="post-thumb">
                     <img class="img-fullwidth img-responsive" src="{{asset('assets/images/artikel')}}/{{$artikel->image }}" alt=""> 
                    </div>
                    
                    <ul class="list-inline font-12 mb-20 mt-10">
                      <li><i class="fa fa-user text-theme-color-2 mr-1"></i> <b>Penulis</b> : <a href="{{route('artikel.penulis',['penulis_slug'=>$artikel->penulis->slug])}}">{{$artikel->penulis->name}} </a></li>|
                      <li><i class="fa fa-pencil text-theme-color-2 ml-1 mr-1"></i> <b>Editor :</b> {{$artikel->editor}}</li>
                    </ul>
                    <p class="font-11" align="justify">{!! $artikel->description !!}</p>
                    
                    <div class="mt-30 mb-0">
                        <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                        <ul class="styled-icons icon-circled m-0">
                          <li><a href="whatsapp://send?text=http://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/whatsapp/share" data-bg-color="#48c257"><i class="fa fa-whatsapp text-white"></i></a></li>
                          <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/facebook/share" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                          <li><a href="instagram://send?text=https://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/instagram/share" data-bg-color="#A11312"><i class="fa fa-instagram text-white"></i></a></li>
                        </ul>
                      </div>
                        <ul class="list-inline like-comment pull-left flip font-12">
                      <li><i class="pe-7s-comment"></i>36</li>
                      <li><i class="pe-7s-like2"></i>125</li>
                    </ul>
                    <div class="clearfix"></div>

                  </div>
                </article>
                <div class="tagline p-0 pt-10 mt-5">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="tags">
                          <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> hmi, lk2, lkk, hmiponorogo</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="share text-right flip">
                          <p><a href="whatsapp://send?text=http://hmiponorogo.or.id/{{$artikel->slug}}" data-action="share/whatsapp/share"> <i class="fa fa-share-alt text-theme-colored"></i> Share</a></p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="author-details media-post">
                    <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="{{asset('assets/images/artikel')}}/{{$artikel->penulis->image }}" width="55" height="auto"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-0"><a href="{{route('artikel.penulis',['penulis_slug'=>$artikel->penulis->slug])}}" class="font-18">{{$artikel->penulis->name}}</a></h5>
                      <p>{!!strlen($artikel->short_description) > 71 ? substr($artikel->short_description,0,71) : $artikel->short_description!!}...</p>
                      <ul class="styled-icons square-sm m-0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                  <div class="comments-area">
                    <h5 class="comments-title">Comments</h5>
                    @include('livewire.pertials.replys', ['komentars' => $artikel->komentars, 'artikel_id' => $artikel->id])
                  </div>
                  <div class="comment-box">
                    <div class="row">
                      <div class="col-sm-12">
                        <h5>Leave a Comment</h5>
                        <div class="row">
                          <form method="post" action="{{ route('comment.add') }}">
                             @csrf
                            <div class="col-sm-12">
                              <div class="form-group">
                                <textarea class="form-control" name="komentar" required name="contact_message2" id="contact_message2" placeholder="Enter Message" rows="7"></textarea>
                                <input type="hidden" name="artikel_id" value="{{ $artikel->id }}" />
                              </div>
                              <div class="form-group">
                                <button type="submit" value="Tambah Komentar" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Tambah komentar anda</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>                  
            </div>




            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="latest-posts">
                <h5 class="widget-title title-dots small" style="margin-top: 0;"><span>Related News</span></h5>
                </div>@foreach ($related_blogs as $r_blogs)
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="{{ route('livewire.artikel-single',['slug'=>$r_blogs->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$r_blogs->image }}" alt="" width="88" height="88"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a class="font-13" href="{{ route('livewire.artikel-single',['slug'=>$r_blogs->slug])}}">{{strlen($r_blogs->name) > 88 ? substr($r_blogs->name,0,88) : $r_blogs->name}}</a></h5>
                    <p class="post-date mb-0 font-12"><b style="color: green;">{{strlen($r_blogs->penulis->name) > 5 ? substr($r_blogs->penulis->name,0,5) : $r_blogs->penulis->name}}</b> | {{$r_blogs->created_at}}</p>
                  </div>
                </article>@endforeach

                <style>
                     .video-container {
                      position: relative;
                      padding-bottom: 56.25%;
                      /*padding-top: 30px;*/
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
                </style><br><br>
                <div class="video-container">
                    <iframe width="420" height="315" src="//www.youtube.com/embed/{{$artikel->status}}" frameborder="0" allowfullscreen></iframe>
                </div> <br>
                  <div class="widget" >
                    <h5 class="widget-title title-dots small"><span>Populer News</span></h5>
                    <div class="latest-posts"><?php $no = 1; ?>@foreach ($popular_news as $pn)
                      <article class="post media-post clearfix pb-0 mb-5" style="background-color: #04ff29;">
                        <a class="post-thumb" href="#" style="padding: 0 0px 0 13px; "><h4 style="font-size: 31px;">0{{$no++}}</h4></a>
                        <div class="post-right">
                          <h5 class="post-title mt-5" style="margin-bottom: 0; padding-right: 6px"><a href="{{ route('livewire.artikel-single',['slug'=>$pn->slug])}}">{{strlen($pn->name) > 70 ? substr($pn->name,0,70) : $pn->name}}.</a></h5>
                          <p class="post-date mb-5 font-12"><b style="color: white;">Posted</b> | {{$pn->created_at}}</p>
                        </div>
                      </article>@endforeach  
                    </div>
                  </div>
                  <div class="widget">
                    <h5 class="widget-title title-dots small"><span>Latest News</span></h5>
                    <div class="latest-posts">@foreach ($latest_news as $ln)
                      <article class="post media-post clearfix pb-0 mb-5">
                        <a class="post-thumb" href="{{ route('livewire.artikel-single',['slug'=>$ln->slug])}}"><img src="{{asset('assets/images/artikel')}}/{{$ln->image }}" alt="" width="77" height="77"></a>
                        <div class="post-right">
                          <h5 class="post-title mt-0" style="margin-bottom: 0;"><a href="{{ route('livewire.artikel-single',['slug'=>$ln->slug])}}">{{strlen($ln->name) > 58 ? substr($ln->name,0,58) : $ln->name}}</a></h5>
                          <p style="font-size: 12px; margin-bottom: 0;">{!!strlen($ln->short_description) > 68 ? substr($ln->short_description,0,68) : $ln->short_description!!}...</p>
                          <p style="font-size: 10px;"><b style="color: green;">{{strlen($ln->kategori->name) > 16 ? substr($ln->kategori->name,0,16) : $ln->kategori->name}}</b> | {{$ln->created_at}}</p>
                        </div>
                      </article>@endforeach 
                      {{$latest_news->links()}} 
                    </div>
                  </div>   
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
                <div class="col-xs-12">
                   <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="{{asset('portal/images/bg6.jpg')}}" id="gallery">
                     <div class="container pt-30 pb-20">
                        <div class="section-title text-center">
                          <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                              <h2 class="mt-0 pb-0 mb-0 text-white text-uppercase">Photo  <span class="text-theme-color-2">Gallery</span></h2>
                            </div>
                          </div>
                        </div>
                        <div class="section-content">
                          <div class="row">
                            <!-- Gallery Grid -->
                            <div class="owl-carousel-6col" data-nav="true">@foreach ($galeries as $galeri)
                              <div class="item">
                                <div class="work-gallery">
                                  <div class="gallery-thumb">
                                    <img class="img-fullwidth" alt="" src="{{asset('assets/images/artikel')}}/{{$galeri->image }}">
                                    <div class="gallery-overlay"></div>                  
                                    <div class="gallery-contect">
                                      <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                        <li><a data-rel="prettyPhoto" href="#" alt="galeri kegiatan"><i class="fa fa-arrows"></i></a></li>
                                      </ul>
                                    </div> 
                                  </div>
                                  <div class="gallery-bottom-part text-center" style="padding: 5px 5px 9px;">
                                    <h5 style=" margin: 0; font-size: 12px;">{{$galeri->name}}</h5>
                                    <h6 class="title text-uppercase font-raleway font-weight-600 m-0" style="font-size: 8px;">{{$galeri->tempat }} | {{$galeri->created_at }}</h6>
                                  </div>
                                </div>
                              </div>
                              @endforeach 
                            </div>
                            <!-- End Gallery Grid -->
                          </div>
                        </div>
                      </div >
                    </section>
                </div>
             </div>
          </div>
          <!-- batas col9 -->
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
      </div>
    </section>
</div>

