
<section id="teachers-singel" class="pt-20 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    @foreach($tentangs as $tentang)
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{asset('assets/images/artikel')}}/{{$tentang->image }}" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6>{{$tentang->name}}</h6>
                            <span>{{$tentang->nama_ketua}}</span>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <p style="text-align : justify;">{{$tentang->short_description}}</p>
                        </div>
                    </div> <!-- teachers left -->
                    @endforeach
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true" style="background-color: #315377; color: white;">Tentang HmI Cabang Ponorogo</a>
                            </li>
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    @foreach($tentangs as $tentang)
                                    <div class="singel-dashboard pt-40">
                                        <h5>Prakata Ketua Umum</h5>
                                        <p style="text-align : justify;">{{$tentang->content}}.</p>
                                    </div> <!-- singel dashboard -->
                                    @endforeach
                                </div> <!-- dashboard cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

                        