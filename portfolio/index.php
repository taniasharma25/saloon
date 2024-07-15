<?php include "../partials/header.php"; ?>

  <!-- <section class="portfolio-hearder">
    <div class="container">
      <div class="banner-inner">

      </div>
    </div>
  </section>
  banner section end  -->


  <!-- gallery start -->
  
<!-- Header -->
<div class="header" id="myHeader">
    <h1>Image Grid</h1>
    <p>Click on the buttons to change the grid view.</p>
    <button class="btn" onclick="one()">1</button>
    <button class="btn active" onclick="two()">2</button>
    <button class="btn" onclick="three()">3</button>
    <button class="btn" onclick="four()">4</button>
    <button class="btn" onclick="five()">5</button>
  </div>
  
  <!-- Photo Grid -->
  <div class="row"> 
    <div class="column">
      <img src="<?php echo SITE_URL; ?>assets/images\gallery\barber_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\beauty_02.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\beauty_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\barber_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\barber_02.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\barber_03.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets\images\gallery\barber_04.jpg" style="width:100%">
    </div>
    <div class="column">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/barber_05.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_11.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/woman_08.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/woman_04.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_02.jpg"style="width:100%">
    </div>  
    <div class="column">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_04.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_03.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_05.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_06.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_07.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_09.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_09.jpg" style="width:100%">
    </div>
    <div class="column">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_02.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_03.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_04.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_05.jpg"style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_06.jpg" style="width:100%">
    </div>

    <div class="column">
    <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_03.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/nail_11.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/woman_08.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/woman_04.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images\gallery\barber_01.jpg" style="width:100%">
      <img src="<?php echo SITE_URL; ?>assets/images/gallery/hair_02.jpg"style="width:100%">
    </div>  
  </div>
  
  <script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  
  // Declare a loop variable
  var i;
  
  // Full-width images
  function one() {
      for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "100%";  
      elements[i].style.flex = "100%";
    }
  }
  
  // // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%";  
      elements[i].style.flex = "50%";
    }
  }
  function three() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "30%";  
      elements[i].style.flex = "30%";
    }
  }
  
  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%";  
      elements[i].style.flex = "25%";
    }
  }
  
  function five() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "20%";  
      elements[i].style.flex = "20%";
    }
  }
  
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
  