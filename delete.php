<?php
    include "connect1.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `registration` where id=$id";
        $conn->query($sql);
    }
    header('location:adminskuska.php');
    exit;
?>
<?php
    include "connect1.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `kontakt` where id=$id";
        $conn->query($sql);
    }
    header('location:adminskuska.php');
    exit;
?>