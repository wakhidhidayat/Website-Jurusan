<!DOCTYPE html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="{{asset('img/logouny.jpeg')}}" type="image/jpeg" />
    <title>@yield('title') | Program Studi Pendidikan Teknik Elektronika</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />    
  </head>

  <body>
    <!--================ bagian header =================-->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <img src="{{ asset('img/logouny.jpeg') }}" width="50px" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-sm-4">
              <a class="nav-link" href="{{ route('index') }}">Beranda </span></a>
            </li>
            <li class="nav-item mr-sm-4">
              <a class="nav-link" href="{{ route('prestasi.index') }}">Prestasi</a>
            </li>                 
          </ul>
        </div>
      </nav>


    <!--================ bagian banner =================-->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/banner/banner1.jpg') }}" alt="" width="100%" height="20%">
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/banner/banner2.jpg') }}" alt="Second slide" width="100%" height="20%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/banner/banner3.jpg') }}" alt="Third slide" width="100%" height="20%">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--================ bagian banner =================-->
    @yield('content')
    <!--================ bagian footer  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 single-footer-widget">
            <h4>Link Terkait</h4>
            <ul>
              <li><a href="http://uny.ac.id/">Universitas Negeri Yogyakarta</a></li>
              <li><a href="http://besmart.uny.ac.id/">Besmart UNY</a></li>
              <li><a href="http://himanika.student.uny.ac.id/">Himpunan Mahasiswa Elektronika dan Informatika</a></li>
              <li><a href="http://journal.student.uny.ac.id/jurnal/baca/86">Jurnal Pendidikan Teknik Elektronika</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 single-footer-widget">
            <h4>Sistem Informasi</h4>
            <ul>
              <li><a href="http://www.uny.ac.id/">Sistem Informasi KKN</a></li>
              <li><a href="http://siakad.uny.ac.id/111/index.php">Sistem Informasi Akademik</a></li>
              <li><a href="http://sinaga.uny.ac.id/">Sistem Informasi Ketenagaan</a></li>
              <li><a href="http://sipen.uny.ac.id/">Sistem Informasi Penelitian</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 single-footer-widget">
            <h4>Kontak Kami</h4>
            <ul>
              <li>Alamat : Kompleks Fakultas Teknik Kampus Karangmalang, Yogyakarta, 55281</li>
              <li>Telepon : +62 274554686</li>
              <li>Email : elektronika@uny.ac.id</li>
            </ul>
          </div>
          <div class="row footer-bottom d-flex justify-content-between">
              <p class="col-lg-12 col-sm-12 footer-text m-0 text-white">
                Copyright&copy; Wahid Hidayat
              </p>  
          </div>          
      </div>
    </footer>
    <!--================ bagian footer  =================-->

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }} "></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }} "></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('js/owl-carousel-thumb.min.js') }} "></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }} "></script>
  </body>
</html>
