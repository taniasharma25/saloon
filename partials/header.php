<?php include __DIR__."../../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lakme Beauty Studio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <!-- mobile nav -->
          <!-- logo -->
          <a class="navbar-brand d-lg-none d-sm-block d-md-block" href="#">
            <img class="logo" src="<?php echo SITE_URL; ?>assets/images/logo.webp" alt="">
          </a>
          <!-- toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- main header -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <div class="navs">
              <a class="navbar-brand-outer d-none d-lg-block d-xl-block" href="#">
                <img class="logo" src="<?php echo SITE_URL; ?>assets/images/logo.webp" alt="">
              </a>
            </div>
            <div class="navs">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " aria-current="home" href="<?php echo SITE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo SITE_URL; ?>services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo SITE_URL; ?>portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo SITE_URL; ?>contactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " aria-current="login" href="<?php echo SITE_URL; ?>admin">Login</a>
                </li>
              </ul>
            </div>
            <div class="navs">
              <a class="nav-link" href="<?php echo SITE_URL; ?>booking">
                <button type="button" class="btn btn-outline-dark">Book Appointment</button>
              </a>
            </div>
            <!-- end navbar -->
          </div>
          <!--  end container-fluid  -->
        </div>
      </nav>
    </header>