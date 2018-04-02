<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
.blog {
   /* background-color: red;
    color: white;*/
    border: none;
    cursor: pointer;
    padding:20px;
    margin-top:20px;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: black;
   /* min-width: 200px;*/
}
.dropdown-child a {
    /*color: white;*/
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devi Ayu Gita</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost:8080/ci3/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="http://localhost:8080/ci3/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="http://localhost:8080/ci3/assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Devi Ayu Gita</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li> -->
            <div class="dropdown">
              <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="#">Blog</a></li>
              <div class="dropdown-child">
                <a href="#blog">Read</a>
                <a href="#list">List</a>
              </div>
            </div>


           <!--  <div class="dropdown">
            <li class="nav-item">
              <a class="blog" href="#blog">Blog</a></li>
              <div class="dropdown-child">
              <a href="http://wwww.yourdonain.com/page1.html">List</a>
              <a href="http://wwww.yourdonain.com/page2.html">Read</a>
            </div>
          </div> -->
            


            <!-- <button class="blog">Main menu</button>
            <div class="dropdown-child">
              <a href="http://wwww.yourdonain.com/page1.html">Child menu 1</a>
              <a href="http://wwww.yourdonain.com/page2.html">Child menu 2</a>
            </div></div> -->

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To My Profil!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#Home">Contact Us</a>
        </div>
      </div>
    </header>

    <!-- Home -->
    <section id="Home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Home</h2>
            <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <!-- <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
            </span>
            <h4 class="service-heading">Perguruan Tinggi</h4>
            <p class="text-muted">Politekhnik Negeri Malang, jalan Soekarno Hatta, Malang, Jawa Timur, Indonesia </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Program Studi</h4>
            <p class="text-muted">Program studi Manajeman Informatika, jurusan Teknologi Informasi</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <!-- <i class="fa fa-lock fa-stack-1x fa-inverse"></i> -->
            </span>
            <h4 class="service-heading">Hobbi</h4>
            <p class="text-muted">Desain foto menjadi seni digital berupa gambar vektor</p>
          </div>
        </div>
      </div>
    </section>

   

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">beberapa tentang saya</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="http://localhost:8080/ci3/assets/img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>1997</h4>
                    <h4 class="subheading">Tahun Kelahiran</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">saya lahir di malang, tepatnya pada januari 1997</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="http://localhost:8080/ci3/assets/img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2016</h4>
                    <h4 class="subheading">Pendaftaran Polinema</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">tahun ini saya mendaftar di salah satu perguruan tinggi favorit di malang, yaitu Polinema.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="http://localhost:8080/ci3/assets/img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2016</h4>
                    <h4 class="subheading">Dunia Design</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Saya mulai tertarik pada dunia Desain.Saya mempelajari desain kushusnya pada design Vektor secara otodidak.</p>
                  </div>
                </div>
              </li>
              <!-- <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="http://localhost:8080/ci3/assets/img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li> -->
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be
                    <br>Your
                    <br>Self!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>




     <!-- blog -->
    <section class="bg-light" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Blog</h2>
            <h3 class="section-subheading text-muted">Recomended Blog.</h3>
          </div>
        </div>
        <div class="row">
         
          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian, Tujuan, Manfaat, jenis, dan Ciri dari Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              <p class="text-muted">Pengertian laporan adalah bentuk penyajian fakta tentang suatu keadaan atau suatu kegiatan, pada dasarnya fakta yang disajikan itu. berkenaan dengan tanggung jawab yang ditugaskan kepada si pelapor. Fakta
               yang disajikan merupakan bahan atau keterangan untuk informasi yang 
              dibutuhkan...</p>
            </div>
          </div>
          
          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian dan Fungsi Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              <p class="text-muted"><strong>Pengertian Laporan</strong> – Bagi kamu yang aktif di 
                  organisasi ataupun berprofesi sebagai pekerja kantoran, pasti sangat 
                  familiar sekali dengan yang namanya laporan. Setiap mengadakan kegiatan 
                  pasti harus ada laporan, ingin rapat ataupun setelah rapat juga harus 
                  ada laporan, masalah kas bulanan juga...</p>
            </div>
          </div>

          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian, Tujuan, Manfaat, jenis, dan Ciri dari Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              <p class="text-muted">Pengertian laporan adalah bentuk penyajian fakta tentang suatu keadaan atau suatu kegiatan, pada dasarnya fakta yang disajikan itu. berkenaan dengan tanggung jawab yang ditugaskan kepada si pelapor. Fakta
               yang disajikan merupakan bahan atau keterangan untuk informasi yang 
              dibutuhkan...</p>
            </div>
          </div>

          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian dan Fungsi Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              <p class="text-muted"><strong>Pengertian Laporan</strong> – Bagi kamu yang aktif di 
                  organisasi ataupun berprofesi sebagai pekerja kantoran, pasti sangat 
                  familiar sekali dengan yang namanya laporan. Setiap mengadakan kegiatan 
                  pasti harus ada laporan, ingin rapat ataupun setelah rapat juga...</p>
            </div>
          </div>

        </div>
      </div>
    </section>



  <!-- list -->
    <section class="bg-light" id="list">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Blog</h2>
            <h3 class="section-subheading text-muted">Recomended Blog (LIST) .</h3>
          </div>
        </div>
        <div class="row">
         
          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian, Tujuan, Manfaat, jenis, dan Ciri dari Laporan</strong></p>
            </a>
          </div>
          
          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian dan Fungsi Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              
          </div>

          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian, Tujuan, Manfaat, jenis, dan Ciri dari Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              
          </div>

          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong>Pengertian dan Fungsi Laporan</strong></p>
            </a>
            <div class="portfolio-caption">
              
          </div>

        </div>
      </div>
    </section>


     <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h1 class="entry-title">Pengertian, Tujuan, Manfaat, jenis, dan Ciri dari Laporan</h1>  </header><!-- .entry-header -->

  <div class="entry-content">
    <p><strong>Pengertian</strong></p>
    <p>Pengertian laporan adalah bentuk penyajian fakta tentang suatu 
    keadaan atau suatu kegiatan, pada dasarnya fakta yang disajikan itu 
    berkenaan dengan tanggung jawab yang ditugaskan kepada si pelapor. Fakta
     yang disajikan merupakan bahan atau keterangan untuk informasi yang 
    dibutuhkan, berdasarkan keadaan objektif yang dialami sendiri oleh si 
    pelapor (dilihat, didengar, atau dirasakan sendiri) ketika si pelapor 
    telah melakukan suatu kegiatan atau pekerjaan.</p><br>
    <p><strong>Tujuan Laporan</strong></p>
    <ul>
    <li>Mengenalpasti masalah</li>
    <li>Memberikan maklumat dan fakta</li>
    <li>Mencadangkan penyelesaian</li>
    <li>Mencadangkan tindakan yang perlu dilakukan</li>
    <li>Membuat kesimpulan</li>
    <li>Menilai sesuatu penyelidikan atau aktiviti</li>
    <li>Membuat rekod sesuatu peristiwa</li>
    <li>Menganalisi aktiviti perniagaan</li>
    <li>Mensintesis sesuatu pelan tindakan</li>
    <li>Menghuraikan sesuatu peristiwa, prosedur, tindakan dll.</li>
    </ul>
    <p>Laporan boleh berbentuk pendek atau panjang dalam format informal atau formal</p>
    <p><strong>Manfaat Laporan</strong></p>
    <p>Laporan kegiatan merupakan alat yang penting untuk :</p>
    <ol>
    <li>Dasar penentuan kebijakan dan pengarahan pimpinan.</li>
    <li>Bahan penyusunan rencana kegiatan berikutnya.</li>
    <li>Mengetahui perkembangan dan proses peningkatan kegiatan.</li>
    <li>Data sejarah perkembangan satuan yang bersangkutan dan lain-lain.</li>
    </ol>
    <p>sumber:http://bald-gugungondrong.blogspot.co.id/2013/05/pengertian-tujuan-manfaat-jenis-dan.html</p>
  </div><!-- .entry-content -->
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Pengertian Dan Fungsi Laporan</h2>
                  <p><strong>Pengertian Laporan</strong> – Bagi kamu yang aktif di 
                  organisasi ataupun berprofesi sebagai pekerja kantoran, pasti sangat 
                  familiar sekali dengan yang namanya laporan. Setiap mengadakan kegiatan 
                  pasti harus ada laporan, ingin rapat ataupun setelah rapat juga harus 
                  ada laporan, masalah kas bulanan juga harus laporan kepada pimpinan.</p>
                  <p>Nah, dengan begitu pasti kamu sudah terbiasa dengan sesuatu itu. 
                  Tapi, apakah kamu ataupun mereka yang sering bertemu dengan laporan ini 
                  tahu artinya? Jika belum tahu, simak aja artikel ini sampai habis.</p>

                  <p>Laporan ialah sebuah bentuk dokumen atau penyajian yang berisi 
                  tentang fakta suatu keadaan atau kegiatan. Fakta yang disajikan dan 
                  dirangkai tersebut berkaitan dengan tanggung jawab yang diberikan kepada
                   orang bersangkutan.</p>
                  <p>Fakta ini berisi sebuah keterangan ataupun informasi yang didapatkan 
                  dari pengamatan atau yang dialami oleh orang yang diberi tanggung jawab.</p>

                  <h2>Fungsi Laporan</h2>
                  <p>Sebagaimana laporan merupakan sesuatu yang vital dalam ruang lingkup 
                  perusahaan ataupu organisasi. Sesuatu yang selalu dibutuhkan dalam 
                  setiap kegiatan. Dengan begitu kita dapat meniti bahwa laporan pasti 
                  memiliki fungsi yang amat penting. Berikut ini penjelasannya.</p>
                  <p>Fungsi laporan terdiri dari:</p>
                  <ol>
                  <li>Sebagai sarana menyampaikan informasi</li>
                  <li>Sebagai bahan pertanggung jawaban</li>
                  <li>Sebagai bahan evaluasi</li>
                  <li>Sarana pengawasan</li>
                  <li>Sebagai bahan pengambilan keputusan</li>
                  </ol>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/team/2.jpg" alt="">
              <h4 class="section-heading">Devi Ayu Gita</h4>
              <p class="section-heading">Programmer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#www.pinterest.com">
                    <i class="fa fa-pinterest"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#www.whatsapp.com">
                    <i class="fa fa-whatsapp"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#www.instagram.com">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- gallery -->
    <section class="bg-light" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Gallery</h2>
            <h3 class="section-subheading text-muted">foto ini saya ambil dari beberapa tempat.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/02-thumbnail.jpg" width="80%" height="100%" alt="">
          </div>
          
          <div class="col-md-4 col-sm-6 portfolio-item">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/04-thumbnail.jpg" width="80%" height=100%"  alt="">
          </div>
          
          <div class="col-md-4 col-sm-6 text-center">
              <img class="mx-auto rounded-circle" src="http://localhost:8080/ci3/assets/img/portfolio/05-thumbnail.jpg" width="80%" height="100%"  alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; My Profil 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#www.pinterest.com">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#www.whatsapp.com">
                  <i class="fa fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#www.instagram.com">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

   

    <!-- Bootstrap core JavaScript -->
    <script src="http://localhost:8080/ci3/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:8080/ci3/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://localhost:8080/ci3/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="http://localhost:8080/ci3/assets/js/jqBootstrapValidation.js"></script>
    <script src="http://localhost:8080/ci3/assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="http://localhost:8080/ci3/assets/js/agency.min.js"></script>

  </body>

</html>
