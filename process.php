<?php

session_start();

$severname = "den1.mysql1.gear.host";
$username = "phpcrud";
$password = "";
$dbname = "phpcrud";

$name = $_POST['name'];
$location = $_POST['location'];


// Create connection 
$connection = new mysqli($severname, $username, $password, $dbname);

//check connnection
if ($connection->connect_error) {
      die("Connection failed : " . $connection->connect_error);
}


if (isset($_POST['save'])) {

      //sql to create table
      $sql = "INSERT INTO phpcrud.data(Name, Location)VALUES ('$name','$location')";
      // if ($connection->query($sql) === true)
      //       print "New record  created successfully";
      // else
      //       print "Error  " . $sql . "<br>" . $connection->connect_error;

      $_SESSION['message'] = "New record  created successfully";
      $_SESSION['msg_type'] = 'success';
      header("location: index.php");
}

if (isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $connection->query("DELETE FROM phpcrud.data WHERE id=$id") or die($connection->error);
      $_SESSION['message'] = "Record  has been deleted successfully";
      $_SESSION['msg_type'] = 'danger';

      header("location: index.php");
}

$connection->close();
