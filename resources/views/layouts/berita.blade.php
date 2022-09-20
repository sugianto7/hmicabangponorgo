<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, #, learning," />


<!-- Page Title -->
    @yield("title")
    @yield("meta")

<!-- Favicon and Touch Icons -->
<link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{ asset('portal/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('portal/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('portal/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('portal/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('portal/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('portal/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('portal/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('portal/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('portal/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{ asset('portal/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('portal/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">
@livewireStyles
<!-- external javascripts -->
<script src="{{ asset('portal/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{ asset('portal/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('portal/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('portal/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('portal/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('portal/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">

  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <marquee direction="right">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">+62 823-3298-1714</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> <b>
                  <script type='text/javascript'>
                      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                      var date = new Date();
                      var day = date.getDate();
                      var month = date.getMonth();
                      var thisDay = date.getDay(),
                          thisDay = myDays[thisDay];
                      var yy = date.getYear();
                      var year = (yy < 1000) ? yy + 1900 : yy;
                      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                      //-->
                    </script></b>&ensp; |
                      <b id="clock"></b>
                </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">hmicabangponrogobersinergi@gmail.com</a> </li>
              </ul>
            </div>
            </marquee>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="{{asset('portal/images/profil/logo.png')}}" alt="lodi">
            </a>
            <ul class="menuzord-menu">
              <li><a href="{{ route('home') }}">BERANDA</a></li>
              <li><a href="#">PROFIL</a>
                <ul class="dropdown">
                  <li><a href="{{ route('profil') }}">PROFIL</a></li>
                  <li><a href="{{ route('struktur-kepengrusan') }}">STRUKTUR KEPENGURUSAN</a></li>
                  <li><a href="{{ route('galeri') }}">GALERI KEGIATAN</a></li>
                  <li><a href="{{ route('program-kerja') }}">PROGRAM KERJA</a></li>
                </ul>
              </li>
              <li><a href="{{ route('kohati') }}">KOHATI</a></li>
              <li  class="active"><a href="{{ route('artikel') }}">BERITA</a></li>
              <li><a href="{{ route('komisariat') }}">KOMISARIAT</a></li>
              <li><a href="#home">LEMBAGA</a>
                <ul class="dropdown">
                  <li><a href="{{ route('bpl-cabang') }}">BPL</a></li>
                  <li><a href="{{ route('lapmi-cabang') }}">LAPMI</a></li>                 
                </ul>
              </li>
              <li><a href="{{ route('kontak') }}">CONTACT</a></li>
<!--                @if(Route::has('login'))
                 @auth
                  @if(Auth::user()->utype === 'ADM')
                <li><a href="#home">{{Auth::user()->name}} </a>
                    <ul class="dropdown">
                      <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">log Out</a></li>
                      <form id="logout-from" method="POST" action="{{ route('logout') }}">  
                      @csrf
                    </form>                
                    </ul>
                </li>
                 
                  @else
                    <li><a href="#home">{{Auth::user()->name}} </a>
                    <ul class="dropdown">
                      <li><a href="{{ route('user.password') }}">Change Password</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">log Out</a></li>  
                       <form id="logout-from" method="POST" action="{{ route('logout') }}">
                          @csrf
                      </form>               
                    </ul>
                </li>
                  @endif
                   @else
                   <li><a href="#home">LOG IN  </a>
                    <ul class="dropdown">
                      <li><a href="{{route('login')}}">Login</a></li>
                      <li><a href="{{route('register')}}">Register</a></li>                 
                    </ul>
                    </li>
                   @endif
                  @endif -->
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

 {{$slot}}
    <!-- Footer -->
  <footer id="footer" class="footer bg-black-222" data-bg-img="{{asset('portal/images/footer-bg.png')}}">
    <div class="container pt-30 pb-0">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-15" alt="" src="{{asset('portal/images/profil/logo-2.png')}}">
            <p class="font-16 mb-10" style="color: white;">“Terbinanya insan akademis, pencipta, pengabdi yang bernafaskan Islam, dan bertangung jawab atas terwujudnya masyarakat adil makmur yang diridhoi Allah SWT”.</p>
            <a class="font-14" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
            <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
              <label class="display-block" for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>
            
           
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><a target="_blank" href="https://www.hmiponorogo.or.id">KPP HMI Cabang Ponorogo</a></p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('portal/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

    <script type="text/javascript">

    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
 
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->
    </script>
  @stack('scripts')
    @livewireScripts
</body>

<!-- index-magazine-home-layout210:47-->
</html>