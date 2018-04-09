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
                <a href="#">insert</a>
              </div>
            </div>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index#gallery">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
<!-- insert -->
    <section class="bg-light" id="insert">
      <div class="container">
          
        </div>
        <div class="row">
          <div class="col-lg-3"></div>
         
          <div class="col-lg-6">
            <div class="jumbotron">
            <center><h2 class="section-heading text-uppercase"><font face="One Stroke Script LET">Insert</font></h2>
            <font class="section-subheading text-muted">Insert Blog Baru</font></center>
            <br>
            <?php echo form_open_multipart('Tugas/insert'); ?>
            <div class="form-group">
              <p>
                <input type="text" class="form-control ins" name="judul" placeholder="Judul" id="judul" required data-validation-required-message="Please enter title."></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="date" class="form-control ins" name="tanggal" placeholder="Tanggal" id="tanggal" required data-validation-required-message="Please enter date."></p>
                <p class="help-block text-danger"></p>
              <p>
                <input type="text" class="form-control ins" name="autor" placeholder="Autor" id="autor" required data-validation-required-message="Please enter Autor."></p>
                <p class="help-block text-danger"></p>
              <textarea type="text" class="form-control ins" name="konten" placeholder="Konten" id="konten"></textarea><br>
              <p>
                <input type="file" class="form-control ins" name="userfile" placeholder="Foto" id="foto"></p>

                <button type="submit" class="btn btn-primary">Insert</button>
                <button type="reset" class="btn btn-primary">cancel</button>
          </div>
            <?php //echo form_close(); ?>
             <!-- </form> -->
          </div>
        </div>

          <div class=col-lg-3""></div>

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
