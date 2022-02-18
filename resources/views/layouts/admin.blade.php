<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HMI CABANG PONOROGO</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('summernote/css/bootstrap.min.css')}}"></link>
    <link rel="stylesheet" href="{{asset('summernote/font-awesome.min.css')}}"> 
    <link href="{{asset('summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('summernote/summernote-bs4.min.css')}}" rel="stylesheet">

    @livewireStyles
</head>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #114d2b;">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #114d2b; ">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo-2.png')}}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/LOGI.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu" style="color: #ffff;"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify" style="color: #ffff;"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button" style="color: #ffff;"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="border-0 mdi mdi-magnify"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" style="margin-bottom: -27px;">
                  <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                        </div>
                      </div>
                    </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline" style="color: #ffff;"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            @if(Route::has('login'))
              @auth
                @if(Auth::user()->utype === 'ADM')
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{asset('assets/images/artikel')}}/{{Auth::user()->profile_photo_path}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-success">{{Auth::user()->name}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="/">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Back Beranda </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Log Out </a>
              </div>
            </li>
            @else
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{asset('assets/images/artikel')}}/{{Auth::user()->profile_photo_path}}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">Back Beranda </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Log out </a>
              </div>
            </li>
            @endif
              @else
                  <li><a href="{{route('login')}}"><i class="icon-user"></i>Log in</a></li>
                    <li><a href="{{route('register')}}"><i class="icon-user"></i>register</a></li>
            @endif
                @endif
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();">
                <i class="mdi mdi-power" style="color: #ffff;"></i>
              </a>
              <form id="logout-from" method="POST" action="{{ route('logout') }}">@csrf</form>
            </li>
          </ul>
                
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu" style="color: #ffff;"></span>
          </button>
        </div>
      </nav>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('assets/images/artikel')}}/{{Auth::user()->profile_photo_path}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2 text-success">{{Auth::user()->name}}</span>
                  <span class="text-secondary text-small">Aplication HMI</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-title text-success">Dashboard</span>
                 <i class="mdi mdi-home menu-icon" style="color: #1ddbc8;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title text-success">Profil</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-face-profile menu-icon" style="color: #1ddbc8;"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.profil') }}">Profil</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.str-cabang') }}">Struktur Kepengurusan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.galeri') }}">Galeri</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.proker') }}">Program Kerja</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui">
                <span class="menu-title text-success">Berita</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-earth menu-icon" style="color: #1ddbc8;"></i>
              </a>
              <div class="collapse" id="ui">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.artikel') }}">Artikel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.kategori') }}">Kategori</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.penulis') }}">Penulis</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uis" aria-expanded="false" aria-controls="uis">
                <span class="menu-title text-success">Komisariat</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi mdi-human-greeting menu-icon" style="color: #1ddbc8;"></i>
              </a>
              <div class="collapse" id="uis">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.komisariat') }}">Komisariat</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.ketumkom') }}">Ketua Komisariat</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.kohati') }}">
                <span class="menu-title text-success">Kohati</span>
                <i class="mdi mdi mdi-human-female menu-icon" style="color: #1ddbc8;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title text-success">Lembaga</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-home-modern menu-icon" style="color: #1ddbc8;"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.bpl') }}"> BPL </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.lapmi') }}"> LAPMI </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.kontak') }}">
                <span class="menu-title text-success">Kontak</span>
                <i class="mdi mdi mdi-contact-mail menu-icon" style="color: #1ddbc8;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uii" aria-expanded="false" aria-controls="uii">
                <span class="menu-title text-success">Pengaturan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi mdi mdi-settings menu-icon" style="color: #1ddbc8;"></i>
              </a>
              <div class="collapse" id="uii">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.slider') }}">Slider Home</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.tentang') }}">Tentang Home</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.priode') }}">Priode</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.akun') }}">Akun</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-from').submit();" class="btn btn-primary">Logout</a>
                </div>
                <form id="logout-from" method="POST" action="{{ route('logout') }}">
                    @csrf
                     </form>
              </div>
            </div>
          </div>
        <!-- partial -->
        <div class="main-panel" >
        <!-- Container Fluid-->
        {{$slot}}

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © ReyogIO 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Call <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">HMI CABANG PONOROGO </a> from HMI.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="{{asset('summernote/js/jquery.min.js')}}"></script>
    <script src="{{asset('summernote/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('summernote/summernote.min.js')}}"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{asset('assets/js/map-script.js')}}"></script>
  <!-- Page level custom scripts -->
  
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
    @stack('scripts')
@livewireScripts

  </body>
</html>


