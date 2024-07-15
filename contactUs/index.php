<?php include "../partials/header.php"; ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="page-title-txt">
            <h2 class="h2-md">Let's Talk Beauty!</h2>
            <p>Got Questions? Please, don't hesitate to get in touch with us</p>
          </div>
        </div>
      </div>
    </div> <!-- End container -->
  </section> <!-- END INNER PAGE TITLE -->


  <section>
    <div class="container">
      <div class="form-body">
        <form action="" method="">
          <div class="form-box">
            <div class="form-group row">
              <label class="col-form-label col-md-2">First Name<span style="color: red"> *</span></label>
              <div class="col-md-4">
                <input name="first_name" placeholder="" class="form-control" required type="text"
                  pattern="[A-Za-z]{3,32}" />
              </div>
              <label class="col-form-label col-md-2">Last Name</label>
              <div class="col-md-4">
                <input name="last_name" placeholder="" class="form-control" type="text" />
              </div>
            </div>

            <div class="form-group row">
              <label class="col-form-label col-lg-2">Email</label>
              <div class="col-md-4">
                <input name="email" placeholder="" type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                  class="form-control" />
              </div>
              <label class="col-form-label col-md-2">Contact No.<span style="color: red"> *</span></label>
              <div class="col-md-4">
                <input name="student_no" placeholder="" class="form-control" required type="tel" maxlength="10"
                  minlength="10" pattern="[6789][0-9]{9}" />
              </div>
            </div>


            <div class="form-group row">
              <label for="feedback" class="col-form-label col-md-2">Feedback <span style="color: red">
                  *</span></label>
              <div class="col-md-10">
                <textarea type="text" class="form-control" required id="feedback"></textarea>
              </div>
            </div>

            <div style="margin: 2rem 0 ; display: flex; justify-content: center">
              <button type="submit" class="rounded book-appointment-btn w-50">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section
    style="background-image: url(<?php echo SITE_URL; ?>assets/images/contact.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; height: 500px;">
    <div class="container">
      <div class="banner-inner">
        <div class="bg-inner">


          <!-- Section ID -->
          <span class="h2-md">This Week Only</span>

          <!-- Title -->
          <h2 class="h2-title" style="color: white;">Get <span>30% OFF</span></h2>

          <!-- Button -->
          <a href="/saloon/booking" class="btn" style="margin: 2rem 0; color: white; background-color: transparent; border-color: #ffffff;">Book an Appointment</a>
         
        </div>
      </div>
    </div>


  </section>
  <!-- banner section end  -->

  <?php include ".././partials/footer.php"; ?>
