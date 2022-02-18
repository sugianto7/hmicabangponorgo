<section id="page-banner" class="pt-80 pb-80 bg_cover" data-overlay="8" style="background-image: url('base/images/page-banner-4.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Program Kerja HMI Cabang Ponorogo</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Program Kerja</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<section id="course-part" class="pb-35 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mt-20">
                @foreach ($priode_name as $p_name)
                <div class="section-title">
                    <h5>Kalender Kerja</h5>
                    <h2>HMI Cabang Ponorogo {{$p_name->name}} </h2>
                </div> <!-- section title -->
                @endforeach
            </div>
        </div> <!-- row -->
        
        <div class="row course-slied mt-30">
            @foreach ($prokers as $proker)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="cont" style="padding: 5px; text-align: center; border: 2px solid black; background-color: #0b5408;">
                        <a href="/"><h4 style="padding-bottom: 5px white; color: white; padding: 5px; ">{{$proker->hari->name }}</h4></a>
                        <div class="course-teacher">
                            <div class="name">
                                <h6>{!! $proker->description !!}</h6>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>