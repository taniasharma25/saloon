<?php include "../partials/header.php"; ?>
<?php
$firstName = $lastName = $name = $email = $phone = $service = $date = $errorMessage = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  try {
    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $name = !empty($lastName) ? "$firstName $lastName" : $firstName;
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone =  filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $date =  filter_var($_POST['date'], FILTER_SANITIZE_STRING);

    if (empty($name)) {
      throw new Exception("Name is required.");
    }
    if (empty($email)) {
      throw new Exception("Email is required.");
    }
    if (empty($phone)) {
      throw new Exception("Phone number is required.");
    }
    if (empty($service)) {
      throw new Exception("Please choose a service.");
    }
    if (empty($date)) {
      throw new Exception("Date is required.");
    }
    
    $result = mysqli_query(
      $conn,
      "INSERT INTO `appointments` 
        (`name`, `email`, `phone`, `service`, `date`)  
        VALUES ('$name', '$email', '$phone', '$service', '$date')
      ;"
    );

    if(!$result){
      throw new Exception("Something went wrong please try again.");
    }

  } catch (Exception $err) {
    $errorMessage = $err->getMessage();
    // echo $errorMessage;
  }
?>

  <?php if (empty($errorMessage)) { ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          title: "Thank you we will connect you shortly.",
          icon: "success",
          confirmButtonColor: "#000000",
          background: "#f4eadf",
          confirmButtonText: `Okay`,
          allowOutsideClick: false,
          allowEscapeKey: false
        }).then((result) => {
          if (result.isConfirmed) {
            location.href = "<?php SITE_URL; ?>";
          }
        });
      })
    </script>
<?php }
} ?>

<section style="background-image: url(<?php echo SITE_URL; ?>assets/images/booking-banner.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; height: 450px;">
  <div class="container">
    <div class="banner-inner">
      <div class="bg-inner">
        <h2 class="h2-title">Book an Appointment</h2>
        <h2 class="h2">Please fill out the appointment form below to make appointment</h2>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Book Appointment</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- banner section end  -->


<section class="py-4 d-flex justify-content-center align-items-center">
  <div class="container col-md-7">
    <?php if ($errorMessage) { ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
      </div>
    <?php } ?>
    <div class="form-body">
      <form method="POST" id="book-appointment">
        <div class="form-box">
          <div class="form-group row mb-0">
            <div class="col-md-6">
              <input name="firstName" placeholder="First Name*" class="form-control py-3" required type="text" pattern="[A-Za-z]{3,32}">
            </div>
            <div class="col-md-6">
              <input name="lastName" placeholder="Last Name*" class="form-control py-3" type="text">
            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6">
              <input name="email" placeholder="Email Address*" type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control py-3">
            </div>
            <div class="col-md-6">
              <input name="phone" placeholder="Phone Number*" class="form-control py-3" required type="tel" maxlength="10" minlength="10">
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6">
              <select name="service" id="inputService" class="form-control py-3">
                <option selected>Please choose an service</option>
                <option value="Facials">Facials</option>
                <option value="Hair Dresse">Hair Dresse</option>
                <option value="Makeup & Eyebrows">Makeup & Eyebrows</option>
                <option value="Nail care">Nail care</option>
              </select>
            </div>
            <div class="col-md-6">
              <input name="date" type="date" class="form-control py-3" placeholder="Appointment date" required id="inputdate">
            </div>
          </div>

          <div class="mt-5 text-center">
            <button type="submit" class="rounded book-appointment-btn w-50">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<?php include "../partials/footer.php"; ?>