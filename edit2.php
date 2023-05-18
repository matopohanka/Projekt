<?php
  include("partials/header.php");
  include "connect1.php";
  $message="";
  $answer="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from kontakt where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:index.php");
      exit;
    }
    $message=$row["message"];
    $answer=$row["answer"];
  }
  else{
    $id = $_POST["id"];
    $message = $_POST["message"];
    $answer=$_POST["answer"];

    $sql = "update kontakt set message='$message',answer='$answer' where id='$id'";
    $result = $conn->query($sql);
    
  }

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <div class="jumbotron text-center">
  <h1>QNA Otázky - Odpovede</h1>
  </div>
  <form method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

  <label> Otázka </label>
 <input type="text" name="message" value="<?php echo $message; ?>" class="form-control"> <br>

 <label> Odpoveď </label>
 <input type="text" name="answer" value="<?php echo $answer; ?>" class="form-control"> <br>
 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="adminskuska.php"> Admin </a><br>
 </form>
  </body>
  </html>
  
