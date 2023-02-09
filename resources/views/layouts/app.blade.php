<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Book SMK Negeri 1 Surabaya</title>
  @include('component.head')
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="../img/smkn1.png" rel="icon"> --}}
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script>
    function reveal() {
      var reveals = document.querySelectorAll(".reveal");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }

    window.addEventListener("scroll", reveal);
  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto animate__animated animate__fadeInLeft"><a href="/">E-Book</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto animate__animated animate__fadeInDownBig" style="animation-delay: .5s;" href="#">Home</a></li>
          <li><a class="nav-link scrollto animate__animated animate__fadeInDownBig" style="animation-delay: .4s;" href="#pelanggaran">Pelanggaran</a></li>
          <li><a class="nav-link scrollto animate__animated animate__fadeInDownBig" style="animation-delay: .3s;" href="#pelanggaran-harian">Pelanggaran Harian</a></li>
          <li><a class="nav-link scrollto animate__animated animate__fadeInDownBig" style="animation-delay: .2s;" href="#cek-pelanggaran">Cek Poin</a></li>
          <li><a class="nav-link scrollto animate__animated animate__fadeInDownBig" style="animation-delay: .1s;" href="#faq">FAQ</a></li>
          <li class="dropdown"><a href="#" class="animate__animated animate__fadeInDownBig"><span>Lain-lain</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Janji Siswa</a></li>
                <li><a href="#">Tata Tertib</a></li>
                {{-- <li><a href="#">Drop Down 1</a></li> --}}
                {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li> --}}
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      @guest
        <a href="/login" class="appointment-btn scrollto animate__animated animate__fadeInRight">Masuk</a>
      @else
        <a href="/home" class="appointment-btn scrollto animate__animated animate__fadeInRight">Dashboard</a>
        {{-- <a href="/login" class="appointment-btn scrollto animate__animated animate__fadeInRight">{{ strtok(Auth::user()->name, " ") }}</a> --}}
      @endguest

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center">
      <h1 class="animate__animated animate__fadeInDown animate__delay-1s"><b>Welcome to E-Book</b></h1>
      <h2 class="animate__animated animate__fadeInDown" style="animation-delay: 0.5s;">Website pencatatan pelanggaran siswa SMK Negeri 1 Surabaya</h2>
      <a href="#cek-pelanggaran" class="btn-get-started scrollto animate__animated animate__pulse fw-bold animate__infinite" style="animation-delay: 1.5s;">Mulai Sekarang</a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main" style="z-index: 2;">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg" style="z-index: 3; padding-bottom:0;">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="copo col-xl-7 col-lg-7 d-flex justify-content-center align-items-stretch position-relative">
              <img src="../assets/img/about-img.svg" class="about-img reveal" alt="about-us" width="500">
              {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
            </div>

            <div class="poco col-xl-5 col-lg-5 icon-boxes d-flex flex-column align-items-stretch justify-content-center ps-lg-0 pe-lg-2 py-5">
              <h3 class="reveal">Apa itu E-Book ?</h3>
              <p class="pe reveal">E-Book adalah Website pencatatan poin pelanggaran siswa. Sebelumnya Orang Tua atau Wali Murid diwajibkan untuk Register Akun terlebih dahulu. Siswa juga bisa melihat Pelanggaran yang telah mereka lakukan dengan memasukkan NISN page Cek Pelanggaran.</p>

              <div class="reveal">
                <div class="icon-box my-2">
                  <div class="icon"><i class="bx bx-history"></i></div>
                  <h4 class="title"><a href="">Histori Pelanggaran</a></h4>
                  <p class="description">Orang Tua Siswa dapat langsung melihat pelanggaran yang dilakukan oleh Anaknya setelah melakukan Login</p>
                </div>

                <div class="icon-box my-2">
                  <div class="icon"><i class="bx bx-paste"></i></div>
                  <h4 class="title"><a href="">Penanganan</a></h4>
                  <p class="description">Pelanggaran yang dilakukan oleh Siswa dapat ditangani lewat Fitur Penanganan dan langsung disampaikan ke Orang Tua Siswa</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Pelanggaran Section ======= -->
    <section id="pelanggaran" class="services" style="padding:0;">
      <div class="container" style="padding: 40px 0;">

        <div class="section-title reveal">
          <h2>Jenis-jenis Pelanggaran</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box reveal">
              <div class="icon"><i class="fa-solid fa-pen-ruler"></i></div>
              <h4><a href="">Sikap Perilaku</a></h4>
              <p>Kategori <b>Sikap Prilaku</b> ini memiliki banyak sekali pelanggaran dengan rentang <b>10-250 poin</b>, mulai dari membuat kegaduhan sampai dengan Tindakan Kriminal</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box reveal">
              <div class="icon"><i class="bx bxs-time-five"></i></div>
              <h4><a href="">Kerajinan</a></h4>
              <p>Kategori <b>Kerajinan</b> ini termasuk pelanggaran ringan dengan rentang <b>10-20 poin</b>, mulai dari Datang Terlambat sampai Tidak mengikuti Pramuka wajib</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box reveal">
              <div class="icon"><i class="fa-brands fa-black-tie"></i></div>
              <h4><a href="">Kerapian</a></h4>
              <p>Kategori <b>Kerapian</b> ini termasuk pelanggaran ringan dengan rentang <b>10-30 poin</b>, mulai dari Atribut seragam tidak lengkap sampai dengan Memakai make-up berlebihan(putri)</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Departments Section ======= -->
    <section id="pelanggaran-harian" class="departments section-bg">
      <div class="container">

        <div class="section-title pb-3">
          <h2 class="reveal">Pelanggaran Harian</h2>
          <p class="reveal">Fitur ini digunakan untuk menampilkan semua Histori Pelanggaran Siswa berdasarkan tanggal yang Anda tentukan. Fitur ini akan menampilkan nama Pelanggaran yang dilakukan dan poinnya.</p>
        </div>

        <div class="row gy-4 reveal">
          <div class="d-flex tgl" style="padding: 0 15px; align-items: center;">
            <p class="mb-0">Pilih Tanggal : </p>
            <input type="date" name="" id="" class="form-control ms-1 form-control-sm" style="width: auto;">
          </div>
          <div class="col-lg-12 table-responsive mt-2">
            <table class="table table-hover table-bordered">
              <thead style="color:#fff; background-color: #fb6240d6;">
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Pelanggaran</th>
                  <th>Poin</th>
                </tr>
              </thead>
              <tbody style="border-bottom: #dee2e6;">
                <tr>
                  <td>1</td>
                  <td>Iksan Arya Dinata</td>
                  <td>Datang Terlambat</td>
                  <td>10</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="cek-pelanggaran" class="appointment">
      <div class="container">

        <div class="section-title pb-3">
          <h2 class="reveal">Cek Poin Pelanggaran</h2>
          <p class="reveal">Gunakan NISN Anda untuk melihat Poin Pelanggaran Anda, Fitur ini hanya akan menampilkan Poin Pelanggaran dan tidak akan menampilkan Histori Pelanggaran Anda.</p>
        </div>

        <form action="" method="post">
          <div class="row">
            <div class="col-lg-6 reveal">
              <div class="form-group input-group">
                <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN Anda">
                <button class="btn btn-sm btn-danger" style="width: auto;">Cek Poin</button>
              </div>
              
              {{-- After Input --}}
              <div class="card shadow-lg-3 mt-0 mb-2">
                <div class="card-header text-light h5 px-3" style="background: #fd795b;">
                  <i class="fas fa-user-graduate mr-2"></i>
                  Data Siswa
                </div>
                <div class="card-body px-3 text-dark" style="padding: 1.75px 0;">
                  <table class="table mb-0">
                    <tr class="table-tr">
                      <td>Nama</td>
                      <td>:</td>
                      <td>Iksan Arya Dinata</td>
                    </tr>
                    <tr class="table-tr">
                      <td>Kelas</td>
                      <td>:</td>
                      <td>12 RPL 2</td>
                    </tr>
                  </table>
                </div>
              </div>

            </div>
            <div class="col-lg-6">
              <div class="card shadow-lg-3 reveal">
                
                {{-- Before Input --}}
                {{-- <div class="card-body px-3 text-dark text-center" style="padding: 5.25px 0;">
                  <div class="row">
                    <label class="mb-0 poin">Masukkan NISN Anda terlebih dahulu.</label>
                    <label class="mb-0 poin"></label>
                  </div>
                </div> --}}

                {{-- After Input --}}
                <div class="card-body py-3 px-3 text-dark text-center">
                  <div class="row">
                    <label class="mb-0 poin">Poin Pelanggaran Anda adalah</label>
                    <label class="mb-0 poin text-danger">80 poin</label>
                    <label class="mb-0 poin">Diperbarui pada 31-01-2023</label>
                  </div>
                </div>


              </div>
            </div>
            </div>
          </div>
        </form>

      </div>
    </section>
    <!-- End Appointment Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title py-1">
          <h2 class="reveal">FAQ</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li class="reveal">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana saya melihat Pelanggaran yang dilakukan Anak saya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Anda dapat melihat Histori pelanggaran setelah melakukan login di Menu Histori, Anda juga akan mendapatkan pesan .
                </p>
              </div>
            </li>

            <li class="reveal" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Berapa total poin pelanggaran siswa sehingga terancam <b>skorsing?</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dalam buku penghubung tata tertib peserta didik tertulis bahwa siswa yang memiliki total skor 150 akan dilakukan hukuman skorsing.
                </p>
              </div>
            </li>

            <li class="reveal" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Berapa total poin pelanggaran siswa sehingga terancam <b>Dikeluarkan dari Sekolah?</b> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li class="reveal" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-contact">
            <h3 class="reveal">E-Book</h3>
            <p class="reveal">
              Jl. Smea No.4, Wonokromo, Kec. Wonokromo<br>
              Kota SBY, Jawa Timur 60243<br><br>
              <strong>Phone :</strong><a href="tel:+031 8292038"> 031 8292038</a><br>
              <strong>Email :</strong><a href="mailto:info@smkn1-sby.sch.id"> info@smkn1-sby.sch.id</a><br>
              <strong>Website :</strong><a href="http://www.smkn1-sby.sch.id/"> http://www.smkn1-sby.sch.id/</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class="reveal">Menu Halaman</h4>
            <ul class="reveal">
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pelanggaran">Pelanggaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pelanggaran-harian">Pelanggaran Harian</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cek-pelanggaran">Cek Pelanggaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class="reveal">Lain-lain</h4>
            <ul class="reveal">
              <li><i class="bx bx-chevron-right"></i> <a href="">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Janji Siswa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tata Tertib</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>San</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    @include('component.footer')
    @include('component.script')
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>