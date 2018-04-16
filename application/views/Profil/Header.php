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
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/')?>">About</a>
            </li>
            </li>
            <div class="dropdown">
              <li class="nav-item"><a class="blog nav-link js-scroll-trigger" href="#">Blog</a></li>
              <div class="dropdown-child">
                <a href="<?php echo site_url('Tugas/read/')?>">Read</a>
                <a href="<?php echo site_url('Tugas/insert/')?>">insert</a>
              </div>
            </div>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/')?>" >Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Tugas/')?>">Gallery</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>