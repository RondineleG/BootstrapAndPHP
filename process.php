<?php

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
      if ($connection->query($sql)===true)
            print "New record  created successfully";
      else
            print "Error  " . $sql . "<br>" . $connection->connect_error;
}

$connection->close();
