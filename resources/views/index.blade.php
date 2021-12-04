<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/css/custom.css')}}">
</head>
<style>
  .banner {
    background-image: url("{{asset('vendor/image/Web_Banner_Baperlitbang-01_1.jpg')}}");
    background-color: #cccccc;
    width: 100%;
    height: auto;
    background-size: 100% 100%;
    padding: 2vw 5vw;
  }

  .banner-bottom {
    background-image: url("{{asset('vendor/image/Slide_Button_bg.jpg')}}");
    background-color: #cccccc;
    width: 100%;
    height: auto;
    background-size: 100% 100%;
    padding: 2vw 5vw;
  }
</style>

<body>
  <div class="wrapper content">
    <div class="head bg-white">
      <div class="container">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight">
            <img src="{{asset('vendor/image/Logo_Kendal1_1.jpg')}}" alt="" style="width: 3vw;">
          </div>
          <div class="p-3 w-100 bd-highlight text-blue-kendal">
            <h5><b>Baperlitbang Kendal</b></h5>
            <p>Badan Perencenaan, Penelitian, dan Pemgembangan Kabupaten Kendal</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <div class="head-mob w-100 bg-white">
        <div class="d-flex bd-highlight">
          <div class="p-2 flex-shrink-1 bd-highlight">
            <img src="{{asset('vendor/image/Logo_Kendal1_1.jpg')}}" alt="" style="width: 3vw;">
          </div>
          <div class="p-3 w-100 bd-highlight text-blue-kendal">
            <h5><b>Baperlitbang Kendal</b></h5>
            <p>Badan Perencenaan, Penelitian, dan Pemgembangan Kabupaten Kendal</p>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-blue-kendal" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Sub Domain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">PPID</a>
          </li>
        </ul>
        <form>
          <div class="input-icons">
            <i class="fa fa-search icon"></i>
            <input class="input-field form-control rounded-pill text-start" placeholder="Search" type="text">
          </div>
          <!-- <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
          <i class="fas fa-search search__icon" id="icon"></i> -->
        </form>
      </div>
    </div>
  </nav>
  <div class="banner">
    <div class="px-5 text-white">
      <div class="title text-center">
        <h2><b>SELAMAT DATANG</b></h3><br>
          <h6>DI PORTAL RESMI BADAN PERENCANAAN, PENELITIAN, DAN PENGEMBANGAN KABUPATEN KENDAL</h6>
      </div>
      <div class="d-flex bd-highlight">
        <div class="p-2 flex-fill bd-highlight" style="width: 20%;">
          <div class="card bg-white">
            <img src="{{asset('vendor/image/Rectangle_10.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-warning"><b>Kendalkab.co.id</b></h6>
              <p class="card-text text-dark mb-2">Portal Resmi Kabupaten Kendal</p>
              <a href="">Kunjungi Situs</a>
            </div>
          </div>
        </div>
        <div class="p-2 flex-fill bd-highlight" style="width: 20%;">
          <div class="card">
            <img src="{{asset('vendor/image/Rectangle_10.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-warning"><b>Kendalkab.co.id</b></h6>
              <p class="card-text text-dark mb-2">Portal Resmi Kabupaten Kendal</p>
              <a href="">Kunjungi Situs</a>
            </div>
          </div>
        </div>
        <div class="p-2 flex-fill bd-highlight" style="width: 20%;">
          <div class="card">
            <img src="{{asset('vendor/image/Rectangle_10.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-warning"><b>Kendalkab.co.id</b></h6>
              <p class="card-text text-dark mb-2">Portal Resmi Kabupaten Kendal</p>
              <a href="">Kunjungi Situs</a>
            </div>
          </div>
        </div>
        <div class="p-2 flex-fill bd-highlight" style="width: 20%;">
          <div class="card">
            <img src="{{asset('vendor/image/Rectangle_10.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-warning"><b>Kendalkab.co.id</b></h6>
              <p class="card-text text-dark mb-2">Portal Resmi Kabupaten Kendal</p>
              <a href="">Kunjungi Situs</a>
            </div>
          </div>
        </div>
        <div class="p-2 flex-fill bd-highlight" style="width: 20%;">
          <div class="card">
            <img src="{{asset('vendor/image/Rectangle_10.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title text-warning"><b>Kendalkab.co.id</b></h6>
              <p class="card-text text-dark mb-2">Portal Resmi Kabupaten Kendal</p>
              <a href="">Kunjungi Situs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content container container-sm container-md container-lg ">
    <div class="row mt-5">
      <div class="col-8 col-lg-8 col-md-12 col-sm-8">
        <div class="title1">
          <a href="#" class="btn-title1 active"><b>Berita Terkini </b></a>
        </div>
        <div class="d-flex flex-wrap bd-highlight mt-4">
          <div class="p-1 bd-highlight" style="width: 50%;">
            <div class="card border-0">
              <img src="{{asset('vendor/image/Rectangle_13.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="button-link mb-3">
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Artikel</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Terkini</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Litbang</a>
                </div>
                <h5 class="card-title"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam</b></h5>
                <div class="icon-link mb-3">
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="p-2">17 Agustus
                      2021</span></a>
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="p-2">Tim Kreatif</span></a>
                </div>
                <div class="text-card mb-3">
                  <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                    lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent
                    elementum facilisis leo, vel</p>
                </div>
                <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="p-1 bd-highlight" style="width: 50%;">
            <div class="card border-0">
              <img src="{{asset('vendor/image/Rectangle_13.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="button-link mb-3">
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Artikel</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Terkini</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Litbang</a>
                </div>
                <h5 class="card-title"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam</b></h5>
                <div class="icon-link mb-3">
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="p-2">17 Agustus
                      2021</span></a>
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="p-2">Tim Kreatif</span></a>
                </div>
                <div class="text-card mb-3">
                  <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                    lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent
                    elementum facilisis leo, vel</p>
                </div>
                <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="p-1 bd-highlight" style="width: 50%;">
            <div class="card border-0">
              <img src="{{asset('vendor/image/Rectangle_13.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="button-link mb-3">
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Artikel</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Terkini</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Litbang</a>
                </div>
                <h5 class="card-title"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam</b></h5>
                <div class="icon-link mb-3">
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="p-2">17 Agustus
                      2021</span></a>
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="p-2">Tim Kreatif</span></a>
                </div>
                <div class="text-card mb-3">
                  <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                    lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent
                    elementum facilisis leo, vel</p>
                </div>
                <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="p-1 bd-highlight" style="width: 50%;">
            <div class="card border-0">
              <img src="{{asset('vendor/image/Rectangle_13.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="button-link mb-3">
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Artikel</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Terkini</a>
                  <a class="card-link btn btn-warning text-white btn-sm py-0 px-3 m-0">Litbang</a>
                </div>
                <h5 class="card-title"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam</b></h5>
                <div class="icon-link mb-3">
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="p-2">17 Agustus
                      2021</span></a>
                  <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="p-2">Tim Kreatif</span></a>
                </div>
                <div class="text-card mb-3">
                  <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                    lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent
                    elementum facilisis leo, vel</p>
                </div>
                <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-2">
          <a href="" class="btn bg-blue-kendal text-white text-center">Halaman Selanjutnya</a>
        </div>
      </div>
      <div class="col-4 col-lg-4 col-md-12 col-sm-4">
        <div class="title1">
          <a href="#" class="btn-title1 active"><b>Folow Us On Twitter</b></a>
        </div>
        <div class="card mt-4 border-0">
          <div class="card-body p-0">
            <h4 class="card-title">Tweet<span style="font-size: x-small; margin-left: 5px;">oleh<a href="#" style="text-decoration: none; margin-left: 2px;">@baperlitbangkdl</a></span>
            </h4>
            <img src="{{asset('vendor/image/image_1.jpg')}}" alt="" width="100%">
          </div>
        </div>
        <div class="title1">
          <a href="#" class="btn-title1 active"><b>Link Favorit</b></a>
        </div>
        <div class="card border-0 mt-4">
          <div class="card-body p-0">
            <ul class="ps-4">
              <a href="#" class="text-decoration-none">
                <li>Kendalkab.go.id</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Rekomendasi Penelitian Online</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Pendaftaran Krenova Kendal</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Wikipedia Tentang Kendal</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Bappeda Prop Jateng</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Kominfo.go.id</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Pusbindiklaten</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Depkeu.go.id</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>KPK.go.id</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>BKN.go.id</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>LPSE JATENG</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Info Barang dan Jasa</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>Radar Pekalongan</li>
              </a>
              <a href="#" class="text-decoration-none">
                <li>SuaraKPK.com</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="postingan-terbaru mt-4">
      <div class="title1">
        <a href="#" class="btn-title1 active"><b>Postingan Terbaru</b></a>
      </div>
      <div class="content d-flex flex-wrap bd-highlight mt-4">
        <div class="p-1 bd-highlight" style="width:33.3%">
          <div class="card mb-3 mt-4 border-0">
            <div class="row g-0">
              <div class="col-lg-5 col-md-12 col-sm-5 col-5">
                <img src="vendor/image/Rectangle_20.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
              </div>
              <div class="col-lg-7 col-md-12 col-sm-7 col-7">
                <div class="card-body py-0 px-2">
                  <h5 class="card-title m-0"><b>Lorem ipsum dolor sit amet, consectetu</b></h5>
                  <div class="icon-link mb-1">
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="ps-1">17 Agustus
                        2021</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="ps-1">Tim Kreatif</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><span class="ps-1">1 Hari yang lalu</span></a>

                  </div>
                  <div class="text-card mb-1">
                    <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit
                      amet,
                      consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                      lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                      praesent
                      elementum facilisis leo, vel</p>
                  </div>
                  <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-1 bd-highlight" style="width:33.3%">
          <div class="card mb-3 mt-4 border-0">
            <div class="row g-0">
              <div class="col-lg-5 col-md-12 col-sm-5 col-5">
                <img src="vendor/image/Rectangle_20.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
              </div>
              <div class="col-lg-7 col-md-12 col-sm-7 col-7">
                <div class="card-body py-0 px-2">
                  <h5 class="card-title m-0"><b>Lorem ipsum dolor sit amet, consectetu</b></h5>
                  <div class="icon-link mb-1">
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="ps-1">17 Agustus
                        2021</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="ps-1">Tim Kreatif</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><span class="ps-1">1 Hari yang lalu</span></a>

                  </div>
                  <div class="text-card mb-1">
                    <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit
                      amet,
                      consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                      lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                      praesent
                      elementum facilisis leo, vel</p>
                  </div>
                  <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-1 bd-highlight" style="width:33.3%">
          <div class="card mb-3 mt-4 border-0">
            <div class="row g-0">
              <div class="col-lg-5 col-md-12 col-sm-5 col-5">
                <img src="vendor/image/Rectangle_20.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
              </div>
              <div class="col-lg-7 col-md-12 col-sm-7 col-7">
                <div class="card-body py-0 px-2">
                  <h5 class="card-title m-0"><b>Lorem ipsum dolor sit amet, consectetu</b></h5>
                  <div class="icon-link mb-1">
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="fas fa-calendar-week"></i><span class="ps-1">17 Agustus
                        2021</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><i class="far fa-user"></i><span class="ps-1">Tim Kreatif</span></a>
                    <a class="card-link m-0 text-secondary" style="text-decoration: none;"><span class="ps-1">1 Hari yang lalu</span></a>

                  </div>
                  <div class="text-card mb-1">
                    <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit
                      amet,
                      consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis,
                      lectus magna fringilla urna, porttitor rhoncus dolor purus non enim
                      praesent
                      elementum facilisis leo, vel</p>
                  </div>
                  <a href="#" class="btn btn-warning btn-sm text-white">Baca selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-bottom">
    <div class="px-5 text-white">
      <div class="row">
        <div class="col-8 col-lg-8 col-md-12 col-sm-8">
          <div class="d-flex flex-wrap bd-highlight mt-4">
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/Indoensia.go.id.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/Kementrian_Dalam_Negeri.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/Bappenas.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/Badan_Pusat Statistik.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/program_kotaku.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/kominfo.jpg')}}" alt="" style="max-width: 100%">
            </div>
            <div class="p-2 bd-highlight" style="width: 50%;">
              <img src="{{asset('vendor/image/Setneg.jpg')}}" alt="" style="max-width: 100%">
            </div>

          </div>
        </div>
        <div class="col-4 col-lg-4 col-md-12 col-sm-4">
          <div class="form-contact-us">
            <div class="text-center p-4 mt-5">
              <h4>Contact Us</h4><br>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lec</p>
            </div>
            <form>
              <div class="mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning text-white">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer bg-blue-kendal pt-5">
    <div class="container">
      <div class="row">
        <div class="col-4 col-lg-4 col-md-6 col-sm-4">
          <section class="date_picker_wrapper" id="date_picker_1">
            <div class="date_picker_header" style="display:none">
              <button class="date_picker_year"></button>
              <h3 class="date_picker_month_day"></h3>
            </div>
            <div class="date_picker_body p-3">
              <div class="date_picker_month_navigation px-2 text-white">
                <div class="row mb-5">
                  <div class="col-9 col-md-8 col-sm-9">
                    <h5 class="date_picker_month_name"></h5>
                  </div>
                  <div class="col-3 col-md-4 col-sm-3 text-end">
                    <button class="date_picker_prev_month date_picker_month_nav_btn me-2">
                      <h5><i class="fas fa-arrow-left"></h4></i>
                    </button>
                    <button class="date_picker_next_month date_picker_month_nav_btn">
                      <h5><i class="fas fa-arrow-right"></i></h4>
                    </button>
                  </div>
                </div>
              </div>
              <ul class="date_picker_month_days text-white">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
              </ul>
            </div>
          </section>
        </div>
        <div class="col-4 col-lg-4 col-md-6 col-sm-4">
          <div class="text-white p-3">
            <h4>
              Prosedur Ijin Penelitian
            </h4>
            <p class="mt-5">Untuk dapat melakukan penelitian di Kabupaten Kendal, maka prosedur untuk mendapatkan ijinnya bisa anda baca disini Untuk menginput data penelitian dapat diinput disini</p>
          </div>
        </div>
        <div class="col-4 col-lg-4 col-md-6 float-end col-sm-4">
          <div class="text-white p-3">
            <h4>
              Prosedur Ijin Penelitian
            </h4>
            <p class="mt-5">Untuk dapat melakukan penelitian di Kabupaten Kendal, maka prosedur untuk mendapatkan ijinnya bisa anda baca disini Untuk menginput data penelitian dapat diinput disini</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer bg-blue-kendal2">
      <div class="container text-white p-5">
        <p class="mt">Hak Cipta © 2021 .Keseluruhan Hak Cipta. </p>
        <p>Tema: ColorMag oleh ThemeGrill. Dipersembahkan oleh WordPress.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
  const CONSTANTS = {
    DOM_SELECTORS: {
      datePicker: "",
      datePickerPrevMonth: ".date_picker_prev_month",
      datePickerNextMonth: ".date_picker_next_month",
      datePickerMonthDays: ".date_picker_month_days",
      datePickerMonthDay: ".date_picker_month_day",
      datePickerYear: ".date_picker_year",
      datePickerMonthName: ".date_picker_month_name",
      datePickerDay: ".day"
    },
    DOM_STRINGS: {
      dataTime: "li[data-time]"
    },
    DUMMY_LI_FOR_EMPTY_DAYS: '<li class="day"></li>',
    DAY_MAP: {
      0: "Sun",
      1: "Mon",
      2: "Tue",
      3: "Wed",
      4: "Thu",
      5: "Fri",
      6: "Sat"
    },
    MONTH_MAP: {
      0: "January",
      1: "February",
      2: "March",
      3: "April",
      4: "May",
      5: "June",
      6: "July",
      7: "August",
      8: "September",
      9: "October",
      10: "November",
      11: "December"
    }
  };

  const utils = (function() {
    function prefixDOMSelectorsWithPickerSelector(pickerSelector) {
      let DOM_SELECTORS = {};
      for (let selector in CONSTANTS.DOM_SELECTORS) {
        DOM_SELECTORS[
          selector
        ] = `${pickerSelector} ${CONSTANTS.DOM_SELECTORS[selector]}`.trim();
      }
      CONSTANTS.DOM_SELECTORS = DOM_SELECTORS;
    }

    function getDOMElements(DOMSelectors) {
      let DOMElements = {};
      for (let selector in DOMSelectors) {
        if (DOMSelectors.hasOwnProperty(selector)) {
          DOMElements[selector] = document.querySelector(DOMSelectors[selector]);
        }
      }
      return DOMElements;
    }

    function getDatePickerWeekDaysNameMarkUp() {
      return `
        <li>Sun</li>
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>`;
    }

    function getDayMarkup(day = 1, isActive = false, time = null) {
      if (!time) {
        console.trace(`The time provided for getDayMarkup ${time} is invalid`);
      }
      return `
        <li class="day" data-time="${time}">
            <button class="${isActive ? "active" : ""}">${day}</button>
        </li>`;
    }

    function getAllDays() {
      let days = document.querySelectorAll(CONSTANTS.DOM_SELECTORS.datePickerDay);
      return [...(days ?? [])];
    }

    function getDaySuffix(day) {
      switch (day) {
        case 1:
        case 21:
        case 31:
          return "st";
        case 2:
        case 22:
          return "nd";
        case 3:
        case 23:
          return "rd";
        default:
          return "th";
      }
    }

    return {
      prefixDOMSelectorsWithPickerSelector,
      getDOMElements,
      getDatePickerWeekDaysNameMarkUp,
      getDayMarkup,
      getAllDays,
      getDaySuffix
    };
  })();

  const model = (function() {
    const data = {
      currentDate: new Date(),
      selectedDate: new Date()
    };

    function setCurrentDate(newDate) {
      data.currentDate = newDate;
    }

    function setSelectedDate(newDate) {
      data.selectedDate = newDate;
    }

    function getCurrentDate() {
      return data.currentDate;
    }

    function getSelectedDate() {
      return data.selectedDate;
    }

    return {
      setCurrentDate,
      setSelectedDate,
      getCurrentDate,
      getSelectedDate
    };
  })();

  const view = (function(model, utils) {
    function removeDays() {
      const allDays = utils.getAllDays();
      allDays.forEach((day) => day.remove());
    }

    function fillEmptyDays(count) {
      const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
      for (let i = 0; i < count; i++) {
        DOMElements.datePickerMonthDays.insertAdjacentHTML(
          "beforeend",
          CONSTANTS.DUMMY_LI_FOR_EMPTY_DAYS
        );
      }
    }

    function fillDay(day, isActive = false, time) {
      const dayMarkUp = utils.getDayMarkup(day, isActive, time);
      const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
      DOMElements.datePickerMonthDays.insertAdjacentHTML("beforeend", dayMarkUp);
    }

    function fillCurrentMonth(string) {
      const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
      DOMElements.datePickerMonthName.textContent = string;
    }

    function fillSelectedDate(month, date, day, year) {
      const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
      DOMElements.datePickerMonthDay.innerHTML = `${
      CONSTANTS.MONTH_MAP[month]
    } ${date}<sup>${utils.getDaySuffix(date)}</sup>, ${CONSTANTS.DAY_MAP[day]}`;
      DOMElements.datePickerYear.textContent = year;
    }

    return {
      removeDays,
      fillEmptyDays,
      fillDay,
      fillCurrentMonth,
      fillSelectedDate
    };
  })(model, utils);

  const controller = (function(model, view, utils) {
    let DOMElements = null;

    function init(pickerSelector = "", selectedDate = new Date()) {
      utils.prefixDOMSelectorsWithPickerSelector(pickerSelector);
      DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
      if (!DOMElements.datePicker) {
        throw new Error(
          `Date Picker with selector ${pickerSelector} not found in the document`
        );
      }
      DOMElements.datePickerNextMonth.addEventListener(
        "click",
        handleNextMonthClick
      );
      DOMElements.datePickerPrevMonth.addEventListener(
        "click",
        handlePrevMonthClick
      );
      DOMElements.datePickerMonthDays.addEventListener("click", handleSelectDate);
      if (selectedDate.constructor !== Date) {
        throw new Error(`The initial date ${selectedDate} is not a Date Object`);
      }
      let clonedSelectedDate = new Date(selectedDate.getTime());
      let clonedCurrentDate = new Date(selectedDate.getTime());
      model.setSelectedDate(clonedSelectedDate);
      model.setCurrentDate(clonedCurrentDate);
      render(selectedDate);
    }

    function handleSelectDate(event) {
      const time = event.target.closest(CONSTANTS.DOM_STRINGS.dataTime)?.dataset
        .time;
      if (!time) return;
      model.setSelectedDate(new Date(Number(time)));
      model.setCurrentDate(new Date(Number(time)));
      render();
    }

    function handleNextMonthClick() {
      render();
    }

    function handlePrevMonthClick() {
      let currentDate = new Date(model.getCurrentDate().getTime());
      currentDate.setMonth(currentDate.getMonth() - 2);
      model.setCurrentDate(currentDate);
      render();
    }

    function render(selectedDate = null) {
      updateSelectedDateMarkUp();
      view.removeDays();
      let currentDate = new Date(
        selectedDate?.getTime() ?? model.getCurrentDate().getTime()
      );
      let selected = model.getSelectedDate();
      let selectedDay = selected.getDate();
      let selectedMonth = selected.getMonth();
      let selectedYear = selected.getFullYear();
      currentDate.setDate(1);
      let renderingMonth = currentDate.getMonth();
      view.fillEmptyDays(currentDate.getDay());
      view.fillCurrentMonth(
        `${CONSTANTS.MONTH_MAP[renderingMonth]} - ${currentDate.getFullYear()}`
      );
      while (currentDate.getMonth() === renderingMonth) {
        let currentMonth = currentDate.getMonth();
        let currentDay = currentDate.getDate();
        let currentYear = currentDate.getFullYear();
        let currentStringDate = `${currentDay}/${
        currentMonth + 1
      }/${currentYear}`;
        let selectedStringDate = `${selectedDay}/${
        selectedMonth + 1
      }/${selectedYear}`;
        view.fillDay(
          currentDate.getDate(),
          selectedStringDate === currentStringDate,
          currentDate.getTime()
        );
        currentDate.setDate(currentDay + 1);
      }
      model.setCurrentDate(currentDate);
    }

    function updateSelectedDateMarkUp() {
      const currentDate = new Date(model.getSelectedDate().getTime());
      view.fillSelectedDate(
        currentDate.getMonth(),
        currentDate.getDate(),
        currentDate.getDay(),
        currentDate.getFullYear()
      );
    }

    return {
      init
    };
  })(model, view, utils);

  controller.init("#date_picker_1");
</script>

</html>