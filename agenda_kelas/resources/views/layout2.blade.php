<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background: white">
        <div class="container-fluid">
          <a class="navbar-brand ms-5" href="#">Guru</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 150px">
              <li class="nav-item" style="padding-right: 30px">
                <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
              </li>
              <li class="nav-item" style="padding-right: 30px">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown" style="padding-right: 30px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/guru">Data Guru</a></li>
                  <li><a class="dropdown-item" href="/kelas">Data Kelas</a></li>
                  <li><a class="dropdown-item" href="/agenda">Data Agenda</a></li>
                </ul>
              </li>
              <li class="nav-item" style="padding-right: 30px">
                <a class="nav-link" href="login">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/guru">Data Guru</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/kelas">Data Kelas</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/agenda">Data Agenda Kelas</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
        <div id="main">
            <div class="main-content">
                @yield('isi2')
            </div>
        </div>
    </div>
</div>
</div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js')}}"></script>

    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>