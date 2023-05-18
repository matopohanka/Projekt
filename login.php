<?php
include("partials/header.php");
include("connect1.php");

if(isset($_POST["submit"])){
  $nameemail = $_POST["nameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM registration WHERE Meno = '$nameemail' OR email = '$nameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['Heslo']){
      $_SESSION["login"] = true;
      
      header("Location: adminskuska.php");
    }
    else{
      echo
      "<script> alert('Zlé heslo!'); </script>";
    }
  }
  else{
    echo
    "<script> alert('Nieste zaregistrovaný!'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2 class="col-md-12">Prihláste sa</h2>
    <form class="col-md-4" action="" method="post" autocomplete="off">
      <label class="col-md-6" for="nameemail">Name or Email : </label>
      <input class="col-md-6" type="text" name="nameemail" id = "nameemail" required value=""> <br>
      <label class="col-md-6" for="password">Password : </label>
      <input class="col-md-6" type="password" name="password" id = "password" required value=""> <br>
      <div class="col-md-12"><button type="submit" name="submit">Prihlásiť sa</button></div>
    <br>
    <p class="col-md-10">Nieste zaregistrovaný? <a href="registration.php">Zaregistrujte sa!</a></p>
    </form>
  </body>
</html>