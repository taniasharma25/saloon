<?php include "./partials/header.php"; ?>

<section>
    <div>
        <div class="banner-area ">
            <!-- carousel start -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- slider 1 -->
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="slider-img d-block w-100" alt="slide 1" style="background-image: url(<?php echo SITE_URL; ?>assets/images/slide-1.jpg);">
                            <div class="carousel-caption ">
                                <!-- Title -->
                                <h2 class="h2">WELCOME TO LAKME <br> STUDIO</h2>
                                <!-- Button -->
                                <div class="txt-block-btn ">
                                    <a href="<?php echo SITE_URL; ?>services/" class="discover-more-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- slider 2  -->
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="slider-img d-block w-100" alt="slide 2" style="background-image: url(<?php echo SITE_URL; ?>assets/images/slide-2.jpg);">
                            <div class="carousel-caption ">
                                <!-- Title -->
                                <h2 class="h2-md">IT’S A PLEASURE TO BE BEAUTIFUL</h2>

                                <!-- Button -->
                                <div class="txt-block-btn ">
                                    <a href="#services" class="discover-more-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- slider 3 -->
                    <div class="carousel-item">
                        <div class="slider-img d-block w-100" alt="slide 3" style="background-image: url(<?php echo SITE_URL; ?>assets/images/slide-3.jpg);">
                            <div class="carousel-caption ">
                                <!-- Title -->
                                <h2 class="h2-md">ENHANCE YOUR NATURAL BEAUTY</h2>

                                <!-- Button -->
                                <div class="txt-block-btn ">
                                    <a href="#services" class="discover-more-btn">Discover More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end carousel inner -->
                </div>

                <!-- play buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- end carousel example -->
            </div>
            <!-- end banner -->
        </div>
        <!-- end container -->
    </div>
</section>

<!-- section 2 -->
<section class=" content-section">
    <div class="container white-smoke--shape">
        <div class="row d-flex align-items-center">
            <!-- TEXT BLOCK -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="txt-block left-column " data-aos="fade-up">
                    <!-- Section ID -->
                    <span class="section-id">Mind, Body and Soul</span>
                    <!-- Title -->
                    <h2 class="h2-md">Luxury salon where you will feel unique</h2>

                    <!-- Text -->
                    <p class="mb-0">At Lakme Beauty Studio, we believe that beauty is not just about how you look, but how you feel. Step into our haven of relaxation and rejuvenation, where our team of skilled professionals is dedicated to providing you with the ultimate salon experience. From trendy cuts to luxurious treatments, we offer a wide range of services tailored to meet your unique needs.
                    </p>

                </div>
                <!-- end text block -->
            </div>

            <!-- IMAGE BLOCK -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="img-block right-column " data-aos="fade-up">
                    <img class="img-fluid" src="<?php echo SITE_URL; ?>assets/images/woman_02.jpg" alt="content-image">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- section 3 -->
<section>
    <div class="container">
        <!-- <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9"> -->
        <div class="txt-block text-center">

            <!-- Section ID -->
            <span class="section-id">Indulge Yourself</span>

            <!-- Transparent Title -->
            <h2 class="tra-title">Come, Relax and Enjoy</h2>

            <!-- Title -->
            <h2 class="h2-title">Your Secret Place of Beauty</h2>

            <!-- Text -->
            <p> we are committed to providing top-quality services in a welcoming and comfortable environment.</p>
        </div>
        <!-- </div>	END TEXT BLOCK	 -->
        <!-- 
      </div> -->
    </div>
</section>

<!-- section 4 -->
<section>
    <div class="container">
        <!-- secrive box sbox -->
        <div class="sbox wrapper text-center">
            <div class="row">
                <!-- SERVICES BOX #1 -->
                <div class="col">
                    <div class="sbox-2 sb-1 wow fadeInUp">
                        <!-- Icon -->
                        <div class="sbox-ico ico-65">
                            <img class="sbox-icon" src="<?php echo SITE_URL; ?>assets/images/facial-massage.png" alt="">
                        </div>
                        <!-- Text -->
                        <div class="sbox-txt">
                            <h5 class="h5-lg">Facials</h5>
                        </div>

                    </div>
                </div>
                <!-- END SERVICES BOX #1 -->

                <!-- SERVICES BOX #2 -->
                <div class="col">
                    <div class="sbox-2 sb-1 wow fadeInUp">
                        <!-- Icon -->
                        <div class="sbox-ico ico-65">
                            <img class="sbox-icon" src="<?php echo SITE_URL; ?>assets/images/woman-hair.png" alt="">
                        </div>
                        <!-- Text -->
                        <div class="sbox-txt">
                            <h5 class="h5-lg">Hair dresser</h5>
                        </div>

                    </div>
                </div>
                <!-- END SERVICES BOX #2 -->

                <!-- SERVICES BOX #3 -->
                <div class="col">
                    <div class="sbox-2 sb-1 wow fadeInUp">
                        <!-- Icon -->
                        <div class="sbox-ico ico-65">
                            <img class="sbox-icon" src="<?php echo SITE_URL; ?>assets/images/beauty.png" alt="">
                        </div>
                        <!-- Text -->
                        <div class="sbox-txt">
                            <h5 class="h5-lg">Makeup & Eyebrows</h5>
                        </div>

                    </div>
                </div>
                <!-- END SERVICES BOX #3 -->

                <!-- SERVICES BOX #4 -->
                <div class="col">
                    <div class="sbox-2 sb-1 wow fadeInUp">
                        <!-- Icon -->
                        <div class="sbox-ico">
                            <img class="sbox-icon" src="<?php echo SITE_URL; ?>assets/images/nail-polish.png" alt="">
                        </div>
                        <!-- Text -->
                        <div class="sbox-txt">
                            <h5 class="h5-lg">Nail Care</h5>
                        </div>

                    </div>
                </div>
                <!-- END SERVICES BOX #4 -->
            </div>
        </div>
    </div>
</section>

<!-- section 5 -->
<section class="content-section2">
    <div class="container white--shape">
        <div class="row d-flex align-items-center">
            <!-- IMAGE BLOCK -->
            <div class="col-lg-6">
                <div class="ct-06-img left-column">
                    <img class="img-fluid" src="<?php echo SITE_URL; ?>assets/images/woman_01.jpg" alt="content-image">
                </div>
            </div>

            <!-- TEXT BLOCK -->
            <div class="col-lg-6">
                <div class="txt-block right-column ">
                    <!-- Section ID -->
                    <span class="section-id">Naturally You</span>
                    <!-- Title -->
                    <h2 class="h2-md">Look more natural with Lakme studio</h2>

                    <!-- ACCORDION WRAPPER -->
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <h6>Personalized Service</h6>
                                </button>
                            </div>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <strong> We take the time to understand your needs and preferences, ensuring that every visit is tailored to meet your specific requirements.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <h6>Premium Products</h6>
                                </button>
                            </div>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong> We use only the finest quality products from trusted brands to ensure optimal results and the health of your hair and skin.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <h6>Relaxing Atmosphere</h6>
                                </button>
                            </div>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <strong>Sit back, relax, and unwind in our inviting salon environment, where comfort and tranquility are our top priorities.</strong>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</section>

<?php include "./partials/page-bottom.php"; ?>
<?php include "./partials/footer.php"; ?>