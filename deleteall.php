<?php
include "connect1.php";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM kontakt";

if ($conn->query($sql) === TRUE) {
  header('location:adminskuska.php');
} else {
  echo "Chyba: " . $conn->error;
}
$conn->close();
?>