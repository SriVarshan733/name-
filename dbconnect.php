<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'insert';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("ERROR: Could not connect " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $uname = $_POST['name'];
  $password = $_POST['pswd'];

  echo $password;
  echo $uname;

  $sql = "INSERT INTO user (username, password) VALUES ('$uname', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "Inserted record successfully";
  } else {
    echo "ERROR: Sorry: " . $sql . " " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
