<?php
include "../config.php";


function getAppointmentsCount($type = "total")
{
  global $conn;
  $appointments = 0;

  try {
    switch ($type) {
      case "today":
        $query = "SELECT COUNT(*) AS total FROM `appointments` WHERE DATE(created_at) = CURDATE()";
        break;
      default:
        $query = "SELECT COUNT(*) AS total FROM `appointments`";
        break;
    }
    $response = mysqli_query($conn, $query);
    $appointments = mysqli_fetch_column($response, 0);
  } catch (mysqli_sql_exception $err) {
    print_r($err->getMessage());
  }
  return $appointments;
}


function getAppointments($status = "all")
{
  global $conn;
  $appointments = [];

  try {
    switch ($status) {
      case "accepted":
        $query = "SELECT * FROM `appointments` WHERE `status` = 'accepted' ORDER BY id DESC;";
        break;
      case "canceled":
        $query = "SELECT * FROM `appointments` WHERE `status` = 'canceled' ORDER BY id DESC;";
        break;
      default:
        $query = "SELECT * FROM `appointments` WHERE `status` IS NULL ORDER BY id DESC;";
        break;
    }
    $response = mysqli_query($conn, $query);
    $appointments = mysqli_fetch_all($response, MYSQLI_ASSOC);
  } catch (mysqli_sql_exception $err) {
    print_r($err->getMessage());
  }
  return $appointments;
}

function acceptCancelAppointment($id, $action){
  global $conn;
  $result = false;
  $id = filter_var($id, FILTER_VALIDATE_INT);
  if(empty($id)){
    return $result;
  }

  try {
    $query = "UPDATE `appointments` SET `status`='$action' WHERE id = $id";

    $result = mysqli_query($conn, $query);
    // die(" here we are 3 ");


  } catch (mysqli_sql_exception $err) {
    print_r($err->getMessage());
  }
  return $result;
}
