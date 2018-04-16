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
                <a href="blog">Read</a>
                <a href="insert">insert</a>
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

         <!--  <?php
            foreach ($artikel['select']->result_array() as $row){
          ?>
           <h4><small>POSTS</small></h4>
           <hr>
           <h2><?php echo $row['Judul']?></h2>
           <h5><span class="glyphicon glyphicon-time"></span> Diposting oleh <?php echo $row['author']?>, <?php echo $row['tanggal']?>.</h5>
            <div class="row">
                <div class="col-sm-3">
                  <p><?php echo "<img src='".base_url()."assets/img/".$row['gambar']."' width='200' height='150'>"?></p>
                </div>  
                <div class="com-sm-9">
                  <p><?php echo $row['artikel']?></p>
                </div>
            </div>
              <p><a href="<?php echo site_url('blogger/baca-artikel/'.$row['id'])?>" class="btn btn-default">Lanjutkan =></a> 
                 <a href="<?php echo site_url('blogger/edit/'.$row['id'])?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                 <a href="<?php echo site_url('blogger/delete/'.$row['id']) ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
              </p>
                <br>
                 <?php
                }


?>
        </div>
      </div>
    </section> -->



 </div></div></section></body>
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
