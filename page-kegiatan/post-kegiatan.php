<?php
require 'function.php';
$data_kegiatan = query("SELECT * FROM data_kegiatan");


//ambil data kegiatanan dari object result
//mysqku_fectcg_row()

// while($giat = mysqli_fetch_assoc($result) ) {
//     var_dumb($giat);
// };



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../img/logovektor satuan.png " rel="shortcut icon">
  <title>Website Resmi Yonif RK 762/VYS</title>
  
</head>
<body>
  <head>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" class="style">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  

<!--boostrap icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--akhir boostrap icon-->
  <link rel="stylesheet" href="../style.css">
  </head>
  <body style="background-image: url(../img/bg/1.jpg);">    
    <!-- navbar -->
    <header>    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient fixed-top">
        <div class="container">          
          <a class="navbar-brand-sm" href="#home">
            <img src="../img/logosatuan 2.png" alt="logosatuan" width="300x">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon-float" ></span>          
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fs-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">BERANDA</a>
              </li>
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#profil" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  PROFIL
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="../list profil/sejarah.html">SEJARAH</a></li>
                  <li><a class="dropdown-item" href="../list profil/arti lambang.html">ARTI LAMBANG SATUAN</a></li>                
                  <li><a class="dropdown-item" href="../list profil/pejabat satuan.html">PEJABAT SATUAN</a></li>
                  <li><a class="dropdown-item" href="../list profil/organisasi.html">ORGANISASI</a></li>
                  <li><a class="dropdown-item" href="../list profil/tugas pokok dan fungsi.html">TUGAS POKOK DAN FUNGSI</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#jajaran kompi" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  JAJARAN KOMPI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="../jajaran kompi/kima.html">KOMPI MARKAS</a></li>
                  <li><a class="dropdown-item" href="../jajaran kompi/kipanA.html">KOMPI SENAPAN A</a></li>                
                  <li><a class="dropdown-item" href="../jajaran kompi/kipanB.html">KOMPI SENAPAN B</a></li>                
                  <li><a class="dropdown-item" href="../jajaran kompi/kipanC.html">KOMPI SENAPAN C</a></li>                
                  <li><a class="dropdown-item" href="../jajaran kompi/kipanD.html">KOMPI SENAPAN D</a></li>                
                  <li><a class="dropdown-item" href="../jajaran kompi/kibant.html">KOMPI BANTUAN</a></li>                
                  <li><a class="dropdown-item" href="../jajaran kompi/kisus.html">KOMPI KHUSUS</a></li>                  
                </ul>
              </li>
              <li class="nav-item dropdown">              
                <a class="nav-link dropdown-toggle" href="#publikasi" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  PUBLIKASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="kegiatan.html">KEGIATAN</a></li>
                  <li><a class="dropdown-item" href="penugasan.html">PENUGASAN</a></li>                
                  <li><a class="dropdown-item" href="prestasi.html">PRESTASI</a></li>                
                  <li><a class="dropdown-item" href="artikel.html">ARTIKEL</a></li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#galeri">GALERI</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="../persit.html">PERSIT</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Akhir navbar -->



      <!--about-->
      <section id="kegiatan">
        <div class="container"> 
          <div class="row text-center">
            <div class="col text-center mb-3">
              <img src="../img/LOGO PADI KAPAS YUDHA SAKTI.png" alt="lambang satuan" height="100px">
              <h2>KEGIATAN</h2>
            </div>
          </div>
          <br>
          <section id="halgiat">
            <div class="row justify-content-star text-align-center">
              <div class="col align-items-center">
                <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                               
                <div class="row text-center mb-3">
                    <div class="item col mb-3">
                      <a href="../img/dok kegiatan/IMG_6296.jpg" class="fancybox" data-fancybox="gambah kegiatan">
                        <img src="../img/dok kegiatan/IMG_6296.jpg" alt="Yonif RK 762 Tempo Dulu" height="250px" >
                      </a>                      
                    </div>
                  </div>              
                  <p>Lanjut komandan yonif RK 762/vys berharap dengan kegiatan seperti ini bisa meningkatkan solidaritas dan kepedulian kepada sesama. Dengan Penyaluran daging qurban ini diharapkan agar dapat mampu mendekatkan Keluarga Besar RK 762/Vys dengan warga masyarakat.</p>
                <? endwhile; ?>
                </div>
              </div>              
          </section>
         </div>                               
      </section>    
      <!--akhir about-->

      
       <!--contact-->
       <section  id="contact">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-9" >
              <a class="navbar-nav" href="#kegiatan">
              <img src="../img/logosatuan 2.png"  alt="logosatuan" width="300x">
            </a>                       
            </div>            
            <div class="col">
              <a class="navbar nav" href="#kegiatan">
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
              <a href="https://www.youtube.com/channel/UCR9TzSBjdinXSLUyxiDTkWg"><img src="../img/Youtube.png" height="50px"></img></a>
              <a href="https://www.facebook.com/762Kasuari/"><img src="../img/facebook.png" height="50px"></img></a>
              <a href="https://www.instagram.com/raider_khusus.762/"><img src="../img/instagram.png" height="50px"></img></a>
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

      <script src="../js/bootstrap.bundle.min.js"></script>

  </body>

</html>
