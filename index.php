<?php   
$conn = mysqli_connect("localhost", "root", "", "virayudhasakti");

$result = mysqli_query($conn, "SELECT * FROM virayudhasakti");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/logovektor satuan.png" rel="shortcut icon">
  <title>Website Resmi Yonif RK 762/VYS</title>
  
</head>
<body >
  <head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" class="style">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


  

<!--boostrap icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--akhir boostrap icon-->
  <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-image: url(img/bg/1.jpg);">    
    <!-- navbar -->
    <header id="beranda">    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient fixed-top">
        <div class="container">          
          <a class="navbar-brand-sm" href="#beranda">
            <img src="img/logosatuan 2.png" alt="logosatuan" width="300x">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon-float" ></span>          
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#beranda">BERANDA</a>
              </li>
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#profil" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  PROFIL
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="list profil/sejarah.html">SEJARAH</a></li>
                  <li><a class="dropdown-item" href="list profil/arti lambang.html">ARTI LAMBANG SATUAN</a></li>                
                  <li><a class="dropdown-item" href="list profil/pejabat satuan.html">PEJABAT SATUAN</a></li>
                  <li><a class="dropdown-item" href="list profil/organisasi.html">ORGANISASI</a></li>
                  <li><a class="dropdown-item" href="list profil/tugas pokok dan fungsi.html">TUGAS POKOK DAN FUNGSI</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#jajaran kompi" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  JAJARAN KOMPI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="jajaran kompi/kima.html">KOMPI MARKAS</a></li>
                  <li><a class="dropdown-item" href="jajaran kompi/kipanA.html">KOMPI SENAPAN A</a></li>                
                  <li><a class="dropdown-item" href="jajaran kompi/kipanB.html">KOMPI SENAPAN B</a></li>                
                  <li><a class="dropdown-item" href="jajaran kompi/kipanC.html">KOMPI SENAPAN C</a></li>                
                  <li><a class="dropdown-item" href="jajaran kompi/kipanD.html">KOMPI SENAPAN D</a></li>                
                  <li><a class="dropdown-item" href="jajaran kompi/kibant.html">KOMPI BANTUAN</a></li>                
                  <li><a class="dropdown-item" href="jajaran kompi/kisus.html">KOMPI KHUSUS</a></li>                
                  
                </ul>
              </li>              
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#publikasi" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  PUBLIKASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="list publikasi/kegiatan.html">KEGIATAN</a></li>
                  <li><a class="dropdown-item" href="list publikasi/penugasan.html">PENUGASAN</a></li>                
                  <li><a class="dropdown-item" href="list publikasi/prestasi.html">PRESTASI</a></li>                
                  <li><a class="dropdown-item" href="list publikasi/artikel.html">ARTIKEL</a></li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">GALERI</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="#persit">PERSIT</a>
              </li>            
            </ul>
          </div>
        </div>
      </nav>
    </header>    
    <!-- Akhir navbar -->


      <!-- jumbotron -->
      <section>
      <div id="myCarousel" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner mb-3">
          <div class="carousel-item active ">            
            <img src="img/besar/1.jpg" class="d-block w-100" alt="besar1">    
            <div class="container">
              <div class="carousel-caption text-start">
                <h1 style="text-align: center;">KEPATUHANKU ADALAH KEBANGGAANKU</h1>                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/besar/2.JPG" class="d-block w-100" alt="besar2">    
            <div class="container">
              <div class="carousel-caption">
                <h1 style="text-align: center;">KEPATUHANKU ADALAH KEBANGGAANKU</h1>                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/besar/3.jpg" class="d-block w-100" alt="besar3">    
            <div class="container">
              <div class="carousel-caption">
                <h1 style="text-align: center;">KEPATUHANKU ADALAH KEBANGGAANKU</h1>                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/besar/4.jpg" class="d-block w-100" alt="besar4">    
            <div class="container">
              <div class="carousel-caption">
                <h1 style="text-align: center;">KEPATUHANKU ADALAH KEBANGGAANKU</h1>               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/besar/5.jpg" class="d-block w-100" alt="besar5">    
            <div class="container">
              <div class="carousel-caption text-end"><h1 style="text-align: center;">KEPATUHANKU ADALAH KEBANGGAANKU</h1>               
              </div>
            </div>
          </div>          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>        
      </div>
      
    </section>
      <!-- akhir jumbotron -->   

      <!--about-->
      <section id="about">
        <div class="container">           
          <div class="row align-items-center fw-bold text-center mb-3" >
            <div class="col-md-5">              
              <p>Batalyon Infanteri Raider Khusus 762/Vira merupakan satu-satunya Batalyon Infanteri dijajaran Kodam XVII/Kasuari yang memiliki 2 ranpur Panser Anoa .  Batalyon ini dibentuk sejak 31 Agustus 1964, yang terdiri atas Kompi Markas, Kompi Senapan A, Kompi bantuan dan Kompi Khusus yang bermarkas di Jln. Basuki Rahmat KM 10,5 Kota Sorong dan Kompi Sepana B, C, D yang bermarkas di Jln Sorong Klamono KM 23 Kab. Sorong, Papua Barat</p>
            </div>
            <div class="col text-center"><img src="img/logovektor satuan.png" height="100px"></div>

            <div class="col-md-5">
              <p>Sebagai kekuatan penindak, kekuatan Satuan Batalyon Raider setara tiga kali lipat kekuatan Satuan Batalyon Infanteri biasa di TNI Angkatan Darat. Kemampuan yang dimiliki para Prajurit Raider diantaranya Demolition, Pembebasan Sandra, Penanggulangan Teror, Pertempuran berlarut dengan keterampilan Operasi Raider, Mobilitas Udara dan Pertempuran Jarak Dekat serta Operasi Khusus lainnya</p>
            </div>
          </div>
        </div>
        
      </section>
            
      <!--akhir about-->
     
      <!--porfolio-->
      <section  id="galeri" >
        <div class="container">
          <div class="row">
            <div class="col text-center mb-3">
              <h2>GALERI</h2>                     
            </div>
            <div class="row justify-content-evenly text-align-center">
              <div class=" item col-md-4 mb-3">
                <div class="card">
                  <a href="img/gambar top/1.JPG" class="fancybox" data-fancybox="galeri">
                  <img src="img/gambar top/1.JPG" class="img-thumbnail" alt="porfolio--1">
                  </a>                  
                </div>
              </div>
              <div class=" item col-md-4 mb-3">
                <div class="card">
                  <a href="img/gambar top/2.JPG" class="fancybox" data-fancybox="galeri">
                  <img src="img/gambar top/2.JPG" class="img-thumbnail" alt="porfolio--1">
                  </a>                  
                </div>
              </div>
              <div class=" item col-md-4 mb-3">
                <div class="card">
                  <a href="img/gambar top/3.JPG" class="fancybox" data-fancybox="galeri">
                  <img src="img/gambar top/3.JPG" class="img-thumbnail" alt="porfolio--1">
                  </a>                  
                </div>
              </div>
              <div class=" item col-md-4 mb-3">
                <div class="card">
                  <a href="img/gambar top/4.JPG" class="fancybox" data-fancybox="galeri">
                  <img src="img/gambar top/4.JPG" class="img-thumbnail" alt="porfolio--1">
                  </a>                  
                </div>
              </div>
              <div class=" item col-md-4 mb-3">
                <div class="card">
                  <a href="img/gambar top/5.JPG" class="fancybox" data-fancybox="galeri">
                  <img src="img/gambar top/5.JPG" class="img-thumbnail" alt="porfolio--1">
                  </a>                  
                </div>
              </div>
            </div>            
          </div>          
        </div>        
        </section>
      

      <!--akhir porfolio-->

      <!--contact-->
      <section  id="contact">
        <div class="container">
          <div class="row">
            <div class="col-9" >
              <a class="navbar-nav" href="#beranda">
              <img src="img/logosatuan 2.png" alt="logosatuan" width="300x">
            </a>                       
            </div>            
            <div class="col justify-content-between">
              <a class="navbar-nav" href="#beranda">
              <h2>Back To Top</h2>
            </a>              
            </div>
          </div>          
        </div>        
      </section>        
      <!--akhir contact-->

      <!--footer-->
      <footer style="background-color: #d6d6d6; ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-3">
              <p class="fw-bold"><u>Media Social</u></p>
              <a href="https://www.youtube.com/channel/UCR9TzSBjdinXSLUyxiDTkWg"><img src="img/Youtube.png" height="50px"></img></a>
              <a href="https://www.facebook.com/762Kasuari/"><img src="img/facebook.png" height="50px"></img></a>
              <a href="https://www.instagram.com/raider_khusus.762/"><img src="img/instagram.png" height="50px"></img></a>
            </div>
            <div class="col-md-6 text-end mb-3">
              <p class="fw-bold"><u>Location</u></p>
              <p>Jl. Basuki Rahmat, Klasaman, Sorong Timur<br> Kota Sorong, Papua Bar. 98416</p>
              <a href="https://www.google.co.id/maps/place/Batalyon+Infanteri+RK+762%2FVYS/@-0.8964472,131.3180406,16z/data=!4m5!3m4!1s0x0:0xce244d803be4e125!8m2!3d-0.8966316!4d131.3181491"><i class="bi bi-geo-alt-fill"></i>Map</a>
            
            </div>
          </div>
        </div>


      </footer>
      <footer class="text-white text-center pb-6" style="background-color: #097c2c; ">
        <p>Created with <i class="bi bi-heart-fill text-danger" ></i> by <a href="https://www.facebook.com/arief.menanti1/" class="text-white fw-bold">Guntur Arif Menanti</a></p>        
        </div>


      </footer>


      <!--akhir footer-->

      <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>