<?php
include('partials/header.php');
include("connect1.php")
?>

<div class="jumbotron text-center">
  <h1>Thank You!</h1>
  <li><a href="index.php"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Klik!</h6></a></li>
</div>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if($conn->connect_error){
    die('Connection failed :'.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into kontakt(name,email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

