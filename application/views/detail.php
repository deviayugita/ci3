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
        <a class="navbar-brand js-scroll-trigger" href="index#page-top">Devi Ayu Gita</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index#about">About</a>
            </li>
            <div class="dropdown">
              <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="#">Blog</a></li>
              <div class="dropdown-child">
                <a href="index#blog">Read</a>
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
                
                    <?php foreach ($Blog_list as $key) { ?>
                    <div class="col-lg-12 portfolio-item">
                      <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                          </div>
                        </div>
                        <p><h1><?php echo $key->Judul ?></h1></p>
                        <p><i><?php echo $key->Autor ?></i></p>
                        <p><i><?php echo $key->Tanggal ?></i></p>
                        <p><img class="mx-auto rounded-circle" src=" <?php echo $key->Image ?>
                          " alt=""></p>
                        <p><font color="black"><?php echo $key->Konten ?></font></p>
                      </a>
                    </div>
                    <?php } ?>

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
