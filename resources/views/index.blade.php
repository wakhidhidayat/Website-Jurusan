@extends('app')

@section('title')
    Beranda
@endsection

@section('content')

    <section class="about_area section_gap">
        <div class="container">
          <div class="row h_blog_item">
            <div class="col-lg-6">
              <div class="h_blog_img">
                <img class="img-fluid" src="{{ asset('img/images (9).jpeg') }} " alt="" width="602px" height="468px" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="h_blog_text">
                <div class="h_blog_text_inner left right">
                  <h4>Selamat Datang Di Website Kami</h4>
                  <p>
                    Pendidikan Teknik Elektronika adalah salah satu program studi di Universitas Negeri Yogyakarta. Program studi ini berada
                    pada jenjang Strata 1 (S1) dengan akreditasi A.
                  </p>
                  <p>
                    Kami bertekad agar mahasiswa di program studi ini bisa berprestasi di lingkungan kampus maupun luar kampus.
                    Oleh karena itu, banyak prestasi yang pernah diraih oleh mahasiswa kami. Baik itu dari segi akademis maupun non akademis.
                  </p>
                  <a class="primary-btn" href="{{ route('prestasi.index') }}">
                    Lihat Prestasi <i class="ti-arrow-right ml-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Profil Pendidikan Teknik Elektronika</h1>
                <p>
                  Ini adalah profil dari prodi Pendidikan Teknik Elektronika
                  di Universitas Negeri Yogyakarta.
                </p>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/GjZRALAaRcY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Apa kata alumni?</h2>
            </div>
          </div>
        </div>


            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="{{ asset('img/testimonials/t1.jpeg') }} " alt="" width="130px" height="130px"/>
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Lisa</h4>
                    <h5>Alumni PTE UNY Angkatan 2007</h5>
                    <p>
                      PTE UNY sangat sesuai dengan passion saya dalam belajar. Disini, menurut saya sangat seimbang
                      antara pembelajaran teknis dengan kependidikan.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="{{ asset('img/testimonials/t2.jpg') }} " alt="" width="130px" height="130px" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Wakhid Hidayat</h4>
                    <h5>Alumni PTE UNY Angkatan 2018</h5>
                    <p>
                      Pengalaman dan kekeluargaan di PTE UNY mengajarkan saya memilih untuk berbagi ilmu kepada orang lain.
                      Pembelajaran tentang teknis dan pendidikan disini sangat seimbang. Semoga pembelajaran di PTE UNY semakin maju!
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="{{ asset('img/testimonials/t3.jpeg') }} " alt="" width="130px" height="130px"/>
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Nagato Himura</h4>
                    <h5>Alumni PTE UNY Angkatan 2013</h5>
                    <p>
                      Paling berkesan bagi saya saat kuliah di PTE UNY adalah tidak adanya perbedaan angkatan.
                      Saya sering hangout dengan senior yang 3tahun lebih tua dari saya. 
                      Serta belajar lebih banyak dari para senior saya.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    
@endsection