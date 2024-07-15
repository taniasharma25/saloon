<?php

const SITE_URL = "http://localhost/saloon/";
const ADMIN_USERS = [
  "tania/tania",
  "admin/admin",
  "guri/guri",
];
$host = "localhost";
$user = "root";
$pass = "";
$database = "saloon_db";
$conn = "";

try {
  $conn = mysqli_connect($host, $user, $pass);
  $query = mysqli_query($conn, "SHOW DATABASES LIKE '$database';");
  $isDbExist = mysqli_fetch_row($query);
  if (empty($isDbExist)) {
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $database;");
    mysqli_query($conn, "USE $database;");
    mysqli_query(
      $conn,
      "CREATE TABLE `appointments` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) DEFAULT NULL,
        `email` varchar(255) DEFAULT NULL,
        `phone` varchar(15) DEFAULT NULL,
        `service` varchar(255) DEFAULT NULL,
        `date` date DEFAULT NULL,
        `status` varchar(255) DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT current_timestamp(),
        `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
        PRIMARY KEY (`id`)
      );"
    );
  }else{
    mysqli_select_db($conn, $database);
  }
} catch (mysqli_sql_exception $err) {
  echo $err->getMessage();
}
