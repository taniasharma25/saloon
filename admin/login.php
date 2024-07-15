<?php include "../partials/header.php"; ?>
<?php
  $username = $password = $errorMessage = ""; 
  try {
    if(isset($_POST["login"]) && $_POST["login"] == true){
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

      if(!in_array("$username/$password", ADMIN_USERS)){
        throw new Exception("Either username/password is wrong.");
      }

      $_SESSION["isLoggedIn"] = true;
      $_SESSION["user"] = $username;
      header("location: ".SITE_URL."admin");
      exit();
    }
  } catch (Exception $th) {
    $errorMessage = $th->getMessage();
  }
?>
<section class="login-section">
  <div class="bg-img">
    <div class="login-container">
      <div class="avatar"> </div>
      <div class="form-box">
        <?php if ($errorMessage) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
          </div>
        <?php } ?>
        <form class="form" role="form" method="POST" accept-charset="UTF-8">
          <input name="username" type="text" placeholder="Admin ID" required>
          <input name="password" type="password" placeholder="Password" required>
          <button type="submit" name="login" value="true" class="btn btn-outline-dark mt-4">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include "../partials/footer.php"; ?>
