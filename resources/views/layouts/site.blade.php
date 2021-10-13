<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href={{asset("assets/images/favicon.svg")}} type="image/x-icon" />
  <title>Sistema de Gestão</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}} />
  <link rel="stylesheet" href={{asset("assets/css/LineIcons.css")}} />
  <link rel="stylesheet" href={{asset("assets/css/materialdesignicons.min.css")}} />
  <link rel="stylesheet" href={{asset("assets/css/main.css")}} />
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="{{route('site.home')}}">
        <img src={{asset("assets/images/logo/logo.svg")}} alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item active">
          <a href="{{route('site.home')}}"> Dashboard </a>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('site.school.index')}}"> Escolas </a>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('site.class.index')}}"> Turmas </a>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('site.student.index')}}"> Alunos </a>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-20">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover text-center">
                  <i class="lni lni-chevron-left"></i>Menu
                </button>
              </div>
              <div class="header-search d-none d-md-flex">
                <form action="{{route('site.home')}}" method="GET">
                  <input type="text" name="search" placeholder="Search..." />
                  <button><i class="lni lni-search-alt"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->


    <!-- ========== section start ========== -->
    @yield('content')
    <!-- ========== section end ========== -->


  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src={{asset("assets/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("assets/js/polyfill.js")}}></script>
  <script src={{asset("assets/js/main.js")}}></script>

 
</body>

</html>