<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
.blog {
    border: none;
    cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-child {
    display: none;
    background-color: black;
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
            <div class="dropdown">
              <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="#">Blog</a></li>
              <div class="dropdown-child">
                <a href="#blog">Read</a>
                <a href="Tugas/insert">insert</a>
              </div>
            </div>

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
         
         <?php foreach ($Blog_list as $key) { ?>
          <div class="col-lg-12 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="detail">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <p><strong><?php echo $key->Judul ?></strong></p>
            </a>
            <div class="portfolio-caption">
              <p class="text-muted"><?php echo $key->Konten ?></p>
            </div>
          </div>
          <?php } ?>




        </div>
      </div>
    </section>



 




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
                  <a href="www.pinterest.com">
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
