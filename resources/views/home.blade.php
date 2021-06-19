<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Workshop Web BPC</title>

  <link rel="shortcut icon" href="{{ url('frontend/image/Logo50.png') }}">
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Righteous&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  <link rel="stylesheet" href="{{ url('frontend/library/datatables/datatables.min.css') }}">

  <link rel="stylesheet" href="{{ url('frontend/library/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/css/timeline.css') }}">

</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light p-3">
    <div class="container">
      <a href="#" class="navbar-brand">
        Workshop BPC
      </a>
      <button class="navbar-toggler navbar-toggler-right bg-white" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item mx-md-4">
            <a href="#home" class="nav-link active" data-easing="easeInOutQuad">Home</a>
          </li>
          <li class="nav-item mx-md-4">
            <a href="#timeline" class="nav-link" data-easing="easeInOutQuad">Timeline</a>
          </li>
          <li class="nav-item mx-md-4">
            <a href="#faq" class="nav-link" data-easing="easeInOutQuad">FAQ</a>
          </li>
          <li class="nav-item mx-md-4">
            <a href="#peserta" class="nav-link" data-easing="easeInOutQuad">Peserta</a>
          </li>
        </ul>
        <!-- Mobile Button -->
        <a href="#registrasi" class="d-sm-block d-md-none btn btn-daftar my-2 my-sm-0" data-easing="easeInOutQuad">Registrasi</a>

        <!-- Desktop Button -->
        <a href="#registrasi" class="my-2 my-lg-0 d-none d-md-block btn btn-daftar my-2 my-sm-0 px-4" data-easing="easeInOutQuad">Registrasi</a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div class="header mb-5">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 d-flex align-items-center">
            <div class="row">
              <div class="col-12">
                <div class="left-content">
                  <h1>Membangun Website Portofolio Menggunakan Bootstrap</h1>
                  <a href="#registrasi" class="btn btn-daftar my-2 my-sm-0 px-4" data-easing="easeInOutQuad">Registrasi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 text-right">
            <div class="right-content">
              <img src="frontend/image/header500.jpg" alt="Ilustration">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Home -->
  <div class="home pt-5 pb-5" id="home">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
          <div class="row">
            <div class="col-12">
              <div class="left-content text-center">
                <img src="frontend/image/Logo500.jpg" alt="Logo BPC" width="400px">
              </div>
            </div>
            </div>
          </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="right-content">
            <h1>Tentang BPC (Budidarma Programming Club)</h1>
            <p><span>BPC (Budidarma Programming Club)</span> merupakan salah satu organisasi pada kampus Universitas Budidarma yang berfokus pada bidang Programming. Memiliki visi sebagai organisasi yang mampu menghasilkan programmer yang bertakwa kepada Tuhan Yang Maha Esa.</p>
            <p>Untuk itu kali ini BPC mengadakan suatu kegiatan Workshop yang bertemakan <span>"Membangun Website Portofolio Dengan Menggunakan Bootstrap"</span>. Kegiatan ini bisa diikuti oleh seluruh mahasiswa Universitas Budidarma mulai dari semester awal sampai semester akhir.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Timeline -->
  <div class="timeline-content pt-5 pb-5" id="timeline">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1>Timeline</h1>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="main-timeline">
        <div class="timeline">
          <div class="icon"></div>
          <div class="date-content">
            <div class="date-outer">
              <span class="date">
                <span class="month">21 Juni</span>
                <span class="year">2021</span>
              </span>
            </div>
          </div>
          <div class="timeline-content">
            <h5 class="title">Pendaftaran</h5>
            <p class="description">
              Pembukaan pendaftaran bagi mahasiswa/mahasiswi Universitas Budidarma yang ingin ikut dalam kegiatan Workshop kali ini.
            </p>
          </div>
        </div>
        <div class="timeline">
          <div class="icon"></div>
          <div class="date-content">
            <div class="date-outer">
              <span class="date">
                <span class="month">2 Juli</span>
                <span class="year">2021</span>
              </span>
            </div>
          </div>
          <div class="timeline-content">
            <h5 class="title">Penutupan Pendaftaran</h5>
            <p class="description">
              Penutupan pendaftaran bagi mahasiswa/mahasiswi Universitas Budidarma.
            </p>
          </div>
        </div>
        <div class="timeline">
          <div class="icon"></div>
          <div class="date-content">
            <div class="date-outer">
              <span class="date">
                <span class="month">3 Juli</span>
                <span class="year">2021</span>
              </span>
            </div>
          </div>
          <div class="timeline-content">
            <h5 class="title">Hari Pelaksaan</h5>
            <p class="description">
              Hari pelaksaan Workshop kali ini akan diadakan pada hari Sabtu/03 Juli 2021 pukul 09.00 sampai selesai
            </p>
          </div>
        </div>
        <div class="timeline">
          <div class="icon"></div>
          <div class="date-content">
            <div class="date-outer">
              <span class="date">
                <span class="month">10 Juli</span>
                <span class="year">2021</span>
              </span>
            </div>
          </div>
          <div class="timeline-content">
            <h5 class="title">Pembagian Sertifikat Peserta</h5>
            <p class="description">
              Pembagian sertifikat peserta akan di kirim langsung melaliu email kepada masing-masing peserta Workshop.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQ -->
  <div class="faq pt-5 pb-5" id="faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1>FAQ</h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-12 col-lg-6 col-md-6">
          <div class="left-content">
            <img src="frontend/image/faq.jpg" alt="FAQ">
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6 d-flex">
          <div class="right-content">
            <div class="accordion" id="accordionExample">
              <div class="card-header mt-2" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Siapa yang boleh ikut?
                  </button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Seluruh mahasiswa maupun mahasiswi Universitas Budidarma Medan baik dari semester awal maupun semester akhir
                </div>
              </div>
              <div class="card-header mt-2" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Apa saja syarat yang di perlukan untuk mengikuti Workshop?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Memiliki laptop pribadi dengan spesifikasi minimal core I3 ram 4Gb, koneksi jaringan yang stabil 
                </div>
              </div>
              <div class="card-header mt-2" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Apa saja yang didapat oleh perserta?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Ilmu yang bermanfaat dari Workshop yang dilaksanakan dan sertifikat dari BPC (Budidarma Programming Club)
                </div>
              </div>
              <div class="card-header mt-2" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Apakah mahasiswa dari luar kampus boleh mengikutinya?
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  Untuk saat ini kegiatan Workshop ini hanya terbatas bagi mahasiswa maupun mahasiswi Universitas Budidarma Medan
                </div>
              </div>
              <div class="card-header mt-2" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Berapa biaya untuk mengikuti Workshop?
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  Biaya untuk mengikuti Workshop ini tentunya sangat murah dan terjangkau hanya sebesar Rp. 5.000
                </div>
              </div>
              <div class="card-header mt-2" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Dimana lokasi Workshop ini dilaksanakan?
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                  Workshop akan dilaksanakan secara daring atau online melalui google meet atupun Zoom.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Registrasi -->
  <div class="registrasi pt-5 pb-5" id="registrasi">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1>Registrasi</h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-8">
          <div class="card shadow">
            <div class="card-body">
              <form action="#">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label for="npm">NPM</label>
                  <input type="text" name="npm" id="npm" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email Aktif</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="nohp">No WhatsApp Aktif</label>
                  <input type="text" name="nohp" id="nohp" class="form-control">
                </div>
                <div class="form-group">
                  <label for="image">Bukti Pembayaran</label>
                  <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="button" class="btn btn-primary px-5 py-2">Registrasi</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Daftar Peserta -->
  <div class="daftar-peserta pt-5 pb-5" id="peserta">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <h1>Daftar Peserta Yang Telah Mendaftar</h1>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-body">
              <table id="daftarPeserta" class="table table-striped table-bordered" style="width: 100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Email</th>
                    <th>No WhatsApp</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>Wiyuda Pratama Mahardika</td>
                    <td>18110243</td>
                    <td>wiyudapratama310@gmail.com</td>
                    <td>08228457xxxx</td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>Ade</td>
                    <td>18110241</td>
                    <td>adenov10@gmail.com</td>
                    <td>08228451xxxx</td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <td>Amanuddin</td>
                    <td>18110242</td>
                    <td>amana30@gmail.com</td>
                    <td>08228452xxxx</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-md-6 d-flex align-items-center">
          <div class="row">
            <div class="col-12">
              <h1>Talk To Us</h1>
              <div class="contact-email">
                <h4 class="text-muted">Email</h4>
                <p>prakatsuki.stmikbd@gmail.com</p>
              </div>
              <div class="contact-sosmed">
                <h4 class="text-muted">Sosial Media</h4>
                <a href="https://www.instagram.com/bpc_budidarma/" target="_blank"><img src="frontend/image/icon/instagram.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/channel/UCsF1Tbutj_aRJF70puhwSKA" target="_blank"
                ><img src="frontend/image/icon/youtube.png" alt="Youtube"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6">
          <h1>Workshop Web</h1>
          <p>
            <span>Workshop</span> kali ini akan berfokus pada <span>Web Programming</span> dimana nanti hasil akhirnya kita akan membuat sebuah Website Landing Page Portofolio Pribadi dengan Framework Bootstrap. Dengan menggunakan bootstrap kita dapat dengan lebih mudah mendesign halaman web.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ url('frontend/library/jquery/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ url('frontend/library/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontend/library/datatables/datatables.min.js') }}"></script>
  <script src="{{ url('frontend/library/smooth-scroll-master/dist/smooth-scroll.polyfills.min.js') }}"></script>
  <script>
    // Datatable
    $(document).ready(function() {
      $('#daftarPeserta').DataTable();
    } );

    // Smooth Scroll
    var easeInCubic = new SmoothScroll('[data-easing="easeInOutQuad"]', {
      easing: 'easeInOutQuad',
      speed: 800,
      speedAsDuration: true
    });
  </script>
</body>
</html>