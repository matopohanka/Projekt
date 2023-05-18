<?php 
include("partials/header.php");
$conn = mysqli_connect("localhost", "root", "", "web");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
  <div class="jumbotron text-center">
  <h1>Admin rozhranie</h1>
  <a class='btn btn-success' href='registration.php'>Pridať záznam</a>
  </div>
<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Vek</th>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Email</th>
        <th>Heslo</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connect1.php";
        $sql = "select * from registration";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[Vek]</td>
        <td>$row[Meno]</td>
        <td>$row[Priezvisko]</td>
        <td>$row[Email]</td>
        <td>$row[Heslo]</td>
        <td>
                  <a class='btn btn-success' href='edit1.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
       <div class="jumbotron text-center"><h1>Správy od používateľov</h1>
       <a class='btn btn-danger' href='deleteall.php'>Vymazať všetky záznamy</a>
      </div> 

      <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Meno</th>
        <th>Email</th>
        <th>Správa</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connect1.php";
        $sql = "select * from kontakt";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[message]</td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>



      <div class="jumbotron text-center">
  <h1>QNA Otázky - Odpovede</h1>
  <a class='btn btn-danger' href='deleteall.php'>Vymazať všetky záznamy</a>
  </div>
<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>
        <th>ID</th>
        <th>Otázka</th>
        <th>Odpoveď</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connect1.php";
        $sql = "select * from kontakt";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <th>$row[message]</th>
        <th>$row[answer]</th>
        <td>
          <a class='btn btn-success' href='edit2.php?id=$row[id]'>Edit</a>   
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
</body>
</html>