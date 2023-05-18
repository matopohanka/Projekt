<?php
include("partials/header.php");
include("connect1.php");
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $age = $_POST["age"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $result = mysqli_query($conn, "SELECT * FROM registration WHERE Priezvisko = '$username' OR email = '$email'");
  if(mysqli_num_rows($result) > 0){
    echo
    "<script> alert('Meno alebo email už niekto používa!'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO registration VALUES('','$age','$name','$email','$password','$username')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registrácia úspešná!'); </script>";
    }
    else{
      echo
      "<script> alert('Heslá sa nezhodujú!'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrácia</title>
  </head>
  <body>
    <h2 class="col-md-12">Registrácia</h2>
    <form class="col-md-4" action="" method="post" autocomplete="off">
      <label class="col-md-6" for="name">Meno : </label>
      <input class="col-md-6" type="text" name="name" id = "name" required value=""> 
      <label class="col-md-6" for="username">Priezvisko : </label>
      <input class="col-md-6" type="text" name="username" id = "username" required value=""> 
      <label class="col-md-6" for="Vek">Vek : </label>
      <input class="col-md-6" type="text" name="age" id = "age" required value=""> 
      <label class="col-md-6" for="email">Email : </label>
      <input class="col-md-6" type="email" name="email" id = "email" required value=""> 
      <label class="col-md-6" for="password">Heslo : </label>
      <input class="col-md-6" type="password" name="password" id = "password" required value=""> 
      <label class="col-md-6" for="confirmpassword">Potvrdenie hesla : </label>
      <input class="col-md-6" type="password" name="confirmpassword" id = "confirmpassword" required value="">
     <div class="col-md-12"><button type="submit" name="submit">Registrovať sa</button></div> 
    
    <br>
    <p class="col-md-10">Ste už zaregistrovaný? <a href="login.php">Prihláste sa!</a></p>
    </form>
  </body>
</html>