<?php include "./helper.php"; ?>
<?php
  $status = isset($_GET["status"]) ? $_GET["status"] : "new";

  if(isset($_GET["accept"]) && !empty($_GET["accept"])){
    if(acceptCancelAppointment($_GET["accept"], "accepted")){
      header("location: ".SITE_URL."admin");
      exit();
    }
  }

  if(isset($_GET["cancel"]) && !empty($_GET["cancel"])){
    if(acceptCancelAppointment($_GET["cancel"], "canceled")){
      header("location: ".SITE_URL."admin");
      exit();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b84a9ba21e.js" crossorigin="anonymous"></script>
</head>

<body style="transform: none;">
  <div class="content" style="transform: none; min-height: 100vh">
    <div class="container" style="transform: none;">
      <div class="row" style="transform: none;">
        <div class="col-md-5 col-lg-4 col-xl-3 fixed theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
          <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
            <div class="profile-sidebar">
              <div class="widget-profile pro-widget-content">
                <div class="profile-info-widget">
                  <a href="#" class="booking-pro-img">
                    <img src="<?php echo SITE_URL; ?>/assets/images/saloon1.jpg" alt="User Image">
                  </a>
                  <div class="profile-det-info mt-2">
                    <h3>Beauty Saloon</h3>
                  </div>
                </div>
              </div>
              <div class="dashboard-widget">
                <nav class="dashboard-menu">
                  <ul>
                    <li class="<?php echo $status === "new" ? "active" : ""; ?>">
                      <a href="<?php echo SITE_URL; ?>admin">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                    <li>
                    <li class="<?php echo $status === "accepted" ? "active" : ""; ?>">
                      <a href="<?php echo SITE_URL; ?>admin?status=accepted">
                        <i class="fas fa-calendar-check"></i>
                        <span>Accepted Appointments</span>
                      </a>
                    </li>
                    <li class="<?php echo $status === "canceled" ? "active" : ""; ?>">
                      <a href="<?php echo SITE_URL; ?>admin?status=canceled">
                        <i class="fa-solid fa-ban"></i>
                        <span>cancelled Appointments</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo SITE_URL; ?>logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
              <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 370px; height: 857px;">
                </div>
              </div>
              <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-7 col-lg-8 col-xl-9">

          <div class="row">
            <div class="col-md-6 stretch-card grid-margin mb-2">
              <div class="card bg-dark card-img-holder text-white">
                <div class="card-body">
                  <h3>Total Appointments</h3>
                  <h2 class="mb-5">
                    <?php echo getAppointmentsCount(); ?>
                  </h2>
                  <h6 class="card-text">Till today</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card grid-margin">
              <div class="card bg-dark card-img-holder two text-white">
                <div class="card-body">
                  <h4 class="font-weight-normal mb-3">Today Appointments<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php echo getAppointmentsCount("today"); ?>
                  </h2>
                  <h6 class="card-text"><?php echo date('d M Y') ?></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4 class="mb-4" style="color: #363636; font-family: vollkorn serif; letter-spacing: 0 ; font-weight: 400; margin : 20px 10px; font-size: 2rem;">
                <?php echo ucfirst($status); ?> Appoinments</h4>
              <!-- <h4 class="mb-4" style= "color: #363636; font-family: Vollkorn serif; letter-spacing: 0; letter-spacing: -0.75px; font-weight: 400; margin-bottom: 0;"> Appoinments</h4> -->
              <div class="appointment-tab">
                <div class="table-responsive">
                  <table class="table" id="appointment-table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Date</th>
                        <?php if($status === "new"){ ?>
                          <th scope="col">Action</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach (getAppointments($status) as $key => $value) { ?>
                        <tr>
                          <th scope="row"><?php echo $key + 1; ?></th>
                          <td><?php echo $value["name"]; ?></td>
                          <td><?php echo $value["email"]; ?></</td>
                          <td><?php echo $value["phone"]; ?></</td>
                          <td><?php echo $value["service"]; ?></</td>
                          <td><?php echo $value["date"]; ?></</td>
                          <?php if($status === "new"){ ?>
                            <td class="table-action">
                              <a href="javascript:void(0);" class="btn btn-sm bg-success-light" onclick="acceptAppointment(<?php echo $value["id"]; ?>, `<?php echo $value["name"]; ?>`)">
                                Accept
                              </a>
                              <a href="javascript:void(0);" class="btn btn-sm bg-danger-light" onclick="cancelAppointment(<?php echo $value["id"]; ?>, `<?php echo $value["name"]; ?>`)">
                                Cancel
                              </a>
                            </td>
                          <?php } ?>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>


<style>
  body {
    background-color: #f4eadf;
  }

  .breadcrumb-bar {
    padding: 15px 0;
  }

  nav.page-breadcrumb {
    color: rgb(33 37 41 / 75%);
    ;
    font-family: 'Vollkorn', serif;
  }

  .breadcrumb-bar .breadcrumb-title {
    font-size: 2rem;
    margin: 5px 0 0;
    color: #363636;
    font-family: 'Vollkorn', serif;
    font-weight: 400;
    margin-bottom: 0;
  }

  .page-breadcrumb ol {
    background-color: transparent;
    font-size: 15px;
    margin-bottom: 0;
    padding: 0 0 0 10px;
    line-height: 1;
  }

  .page-breadcrumb ol li a {
    color: #1b1b22;
  }

  .content {
    min-height: 200px;
    padding: 30px 0 0;
    background-color: #f4eadf;
    ;
  }


  /*-----------------
	47. Customer Dashboard
    -------------------*/

  .profile-sidebar {
    background-color: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 4px;
    margin-bottom: 10px;
    overflow: hidden;
    height: 600px
  }

  .pro-widget-content {
    border-bottom: 1px solid #f0f0f0;
    padding: 20px;
    text-align: center;
  }

  .profile-info-widget {

    display: flex;
    text-align: left;
  }

  .profile-det-info {
    overflow: hidden;
  }

  .profile-det-info h3 {
    font-size: 17px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
  }


  .dashboard-menu ul {
    color: #757575;
    font-size: 14px;
    line-height: 17px;
    list-style: none;
    margin: 0;
    padding: 0;
    text-transform: capitalize;
  }

  .dashboard-menu ul li {
    line-height: inherit;
  }

  .dashboard-menu>ul>li {
    border-bottom: 1px solid #f0f0f0;
    position: relative;
  }

  .dashboard-menu>ul>li:last-child {
    border-bottom: 0;
  }

  .dashboard-menu ul li a span,
  .dashboard-menu ul li a i {
    display: inline-block;
    vertical-align: middle;
  }

  .dashboard-menu>ul>li>a {
    color: #757575;
    display: block;
    padding: 16px 20px;
  }

  .dashboard-menu>ul>li:hover>a,
  .dashboard-menu>ul>li.active>a {
    /* color: #ff3115; */
    color: #520c0c;
  }

  .dashboard-menu ul li a i {
    font-size: 16px;
    margin-right: 10px;
    width: 16px;
  }

  .unread-msg {
    background-color: #ff6a64;
    border-radius: 2px;
    color: #ffffff;
    font-size: 10px;
    font-style: normal;
    padding: 0 5px;
    position: absolute;
    right: 20px;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
  }

  /*-----------------
	48. Appointment card
    -------------------*/
  p.text-muted {
    opacity: 1;
    color: rgb(33 37 41 / 75%);
    padding: 10px 0;
    margin: 0;
  }


  .widget-profile {
    background-color: #fff;
    border-bottom: 1px solid #f0f0f0;
  }

  .widget-profile .profile-info-widget {
    display: block;
    text-align: center;
  }



  .widget-profile .profile-info-widget .booking-pro-img img {
    border-radius: 50%;
    height: 120px;
    width: 120px;
  }


  footer#footer-3 {
    background-color: white;
    display: flex;
    margin-top: 2rem 0 0 0;
    padding-bottom: 0;
  }


  /* accept cancel buttons */

  .bg-success-light {
    background-color: rgba(15, 183, 107, 0.12) !important;
    color: #26af48 !important;
  }

  .bg-danger-light {
    background-color: rgba(242, 17, 54, 0.12) !important;
    color: #e63c3c !important;
  }

  /* card background images */
  .card-img-holder {
    background: url("../assets/images/slide-3.jpg");
    background-repeat: no-repeat;
    background-position: top;
    background-size: cover;
  }

  .card-img-holder.two {
    background: url("../assets/images/address.jpg");
  }

  .card-img-holder .card-body {
    background: rgb(0, 0, 0, 0.6);
  }

  .container {
    max-width: 1500px;
  }

  @media screen and (max-width: 767px) {
    .profile-sidebar {
      height: auto;
    }
  }
</style>

<script>
function acceptAppointment(id, name){
  Swal.fire({
    title: "Are you sure?",
    html: `Do you really want to accept <b>${name}'s</b> appointment?`,
    icon: "question",
    confirmButtonColor: "#000000",
    background: "#f4eadf",
    showCancelButton: true,
    confirmButtonText: "Accept",
    cancelButtonText: "Close"
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `<?php echo SITE_URL; ?>admin?accept=${id}`;
    }
  });
}

function cancelAppointment(id, name){
  Swal.fire({
    title: "Are you sure?",
    html: `Do you really want to cancel <b>${name}'s</b> appointment?`,
    icon: "question",
    confirmButtonColor: "#000000",
    background: "#f4eadf",
    showCancelButton: true,
    confirmButtonText: "Yes",
    cancelButtonText: "Close"
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = `<?php echo SITE_URL; ?>admin?cancel=${id}`;
    }
  });
}

$(document).ready(function(){
  $('#appointment-table').DataTable({
    lengthChange: false,
    searching: false
  });
});

</script>