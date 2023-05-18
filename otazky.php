<?php
include('partials/header.php');
include("connect1.php")?>
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
<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
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
        <th>$row[message]</th>
        <th>$row[answer]</th>
        <td>
                
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

