<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    @yield("title")
    @yield("meta")
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('base/images/favicon.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/animate.css') }}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/nice-select.css') }}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/jquery.nice-number.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/magnific-popup.css') }}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/font-awesome.min.css') }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/default.css') }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/style.css') }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('base/css/responsive.css') }}">
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <!--     <div class="preloader">
            <div class="loader rubix-cube">
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3 color-1"></div>
                <div class="layer layer-4"></div>
                <div class="layer layer-5"></div>
                <div class="layer layer-6"></div>
                <div class="layer layer-7"></div>
                <div class="layer layer-8"></div>
            </div>
        </div>
 -->    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="{{ asset('base/images/all-icon/map.png') }}" alt="icon"><span>127/5 Siman, Ponorogo</span></li>
                                <li><img src="{{ asset('base/images/all-icon/email.png') }}" alt="icon"><span>info@yourmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p><script type='text/javascript'>
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
                                </script></i>&ensp;
                                  <b id="clock"></b></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="{{ asset('base/images/logo.png') }}" alt="" height="50" width="auto">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="{{ asset('base/images/download.png') }}" alt="icon" height="50" width="auto">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>+62 823-3298-1714</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{ route('home') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Profil</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('profil') }}">profil</a></li>
                                            <li><a href="{{ route('struktur-kepengrusan') }}">struktur kepengurusan</a></li>
                                            <li><a href="{{ route('galeri') }}">galeri</a></li>
                                            <li><a href="{{ route('program-kerja') }}">program kerja</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('kohati') }}">kohati</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="{{ route('artikel') }}">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('komisariat') }}">komisariat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Lembaga</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('bpl-cabang') }}">bpl</a></li>
                                            <li><a href="{{ route('lapmi-cabang') }}">lapmi</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('kontak') }}kontak">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right" >
                            <ul>
                                <style>
                                .dropdown {
                                  position: relative;
                                  display: inline-block;

                                }

                                .dropdown-content {
                                    display: none;
                                      position: absolute;
                                      right: 0;
                                      background-color: #07294d;
                                      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                      z-index: 10;
                                      width:150px;
                                      border-radius: 10px;
                                }

                                .dropdown-content a {
                                  color: white;
                                  padding: 10px 22px;
                                  text-decoration: none;
                                  display: block;
                                }

                                .dropdown-content a:hover {background-color: #28a718; border-radius: 10px;}

                                .dropdown:hover .dropdown-content {
                                  display: block;
                                }

                                .dropdown:hover .dropbtn {
                                  background-color: #30bf08;
                                }
                                </style>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                             @if(Route::has('login'))
			               	 @auth
			               	 	@if(Auth::user()->utype === 'ADM')
			               	 	<div class="dropdown">
			               	 		<i class="fa fa-user"></i>
								  <div class="dropdown-content">
								  	<a href="#">{{Auth::user()->name}}</a>
								    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
								    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">log Out</a>
								  </div>
								  <form id="logout-from" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
								</div>
			               	 	@else
			               	 		<div class="dropdown">
									  <i class="fa fa-user"></i>
									  <div class="dropdown-content">
									  	<a href="#">{{Auth::user()->name}}</a>
									    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">logOut</a>
									  </div>
									  <form id="logout-from" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
									</div>
			               	 	@endif
			               	 @else
			               	<li class="dropdown">
                                <a href="#" ><i class="fa fa-user"></i></a>
                                <div class="dropdown-content">
                                    <a href="{{route('register')}}" style="color: white;"> Register <i class="fa fa-user" style="color: white;"></i> </a>
                                    <a href="{{route('login')}}" style="color: white;"> Login <i class="fa fa-user" style="color: white;"></i> </a>
                                </div>
                             </li>
			               	 @endif
			                @endif

			                </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->

    @yield('content')


        <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-20 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('base/images/logo-2.png') }}" alt="Logo"></a>
                            </div>
                            <p>“Terbinanya insan akademis, pencipta, pengabdi yang bernafaskan Islam, dan bertangung jawab atas terwujudnya masyarakat adil makmur yang diridhoi Allah SWT”.</p>
                            <ul class="mt-20">
                                <li><a href=""><i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="https://youtube.com/channel/UCLpoB2wxPdYckGMtFRDjqdg"><i class="fa fa-youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=+62 823-3298-1714&text=Assalamualaikum%20Kanda/Yunda"><i class="fa fa-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://instagram.com/hmi.cabangponorogo.official?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>SiteHmI Cabang Ponorogo</h6>
                            </div>
                            <ul>
                                <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i>Beranda</a></li>
                                <li><a href="{{ route('profil') }}"><i class="fa fa-angle-right"></i>Profil</a></li>
                                <li><a href="{{ route('struktur-kepengrusan') }}"><i class="fa fa-angle-right"></i>Struktur Pengurus</a></li>
                                <li><a href="{{ route('galeri') }}"><i class="fa fa-angle-right"></i>Galeri</a></li>
                                <li><a href="{{ route('program-kerja') }}"><i class="fa fa-angle-right"></i>Program Kerja</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('artikel') }}"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="{{ route('kohati') }}"><i class="fa fa-angle-right"></i>Kohati</a></li>
                                <li><a href="{{ route('komisariat') }}"><i class="fa fa-angle-right"></i>Komisariat</a></li>
                                <li><a href="{{ route('bpl-cabang') }}"><i class="fa fa-angle-right"></i>BPL</a></li>
                                <li><a href="{{ route('lapmi-cabang') }}"><i class="fa fa-angle-right"></i>LAPMI</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us HmI Cabang Ponorogo</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Skretariat Jalan.., Ponorogo</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+62 823-3298-1714</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>hmicabangonrogo@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
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
                           
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div style="position:fixed;left:20px;bottom:20px;">
    <a href="https://api.whatsapp.com/send?phone=+62 823-3298-1714&text=Halo selamat Datang Di HMI CABANG PONOROGO">
    <button style="background:#32C03C;vertical-align:center;height:40px;border-radius:5px">
    <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> Whatsapp Kami</button></a>
    </div>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    <!--====== jquery js ======-->
    <script src="{{asset('base/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('base/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('base/js/bootstrap.min.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('base/js/slick.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('base/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{asset('base/js/waypoints.min.js')}}"></script>
    <script src="{{asset('base/js/jquery.counterup.min.js')}}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{asset('base/js/jquery.nice-select.min.js')}}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('base/js/jquery.nice-number.min.js')}}"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{asset('base/js/jquery.countdown.min.js')}}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{asset('base/js/validator.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('base/js/ajax-contact.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('base/js/main.js')}}"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{asset('base/js/map-script.js')}}"></script>
    <script type="text/javascript">
    <!--
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
    
</body>
</html>
