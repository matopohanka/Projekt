<?php
  include("partials/header.php");
  include "connect1.php";
  $id="";
  $name="";
  $email="";
  $password="";
  $age="";
  $username="";
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from registration where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:index.php");
      exit;
    }
    $name=$row["Meno"];
    $username=$row["Priezvisko"];
    $age=$row["Vek"];
    $email=$row["Email"];
    $password=$row["Heslo"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["heslo"];
    $age=$_POST["vek"];
    $username=$_POST["username"];

    $sql = "update registration set Meno='$name',Priezvisko='$username', Email='$email', Heslo='$password', Vek='$age' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<div class="jumbotron text-center">
 
 <form method="post">
 
 <br><br><div >
 <div class="jumbotron text-center"><h1>Edit údajov</h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> HESLO: </label>
 <input type="text" name="heslo" value="<?php echo $password; ?>" class="form-control"> <br>
 
 <label> VEK: </label>
 <input type="text" name="vek" value="<?php echo $age; ?>" class="form-control"> <br>
 
 <label> PRIEZVISKO: </label>
 <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="adminskuska.php"> Admin </a><br>

 </div>
 </form>