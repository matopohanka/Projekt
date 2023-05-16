

<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['add_portfolio'])){
    print_r("True");
    $data = [
        'name' => $_POST["name"],
        'image' => $_POST["image"],
    ];
    
    $query = "INSERT INTO portfolio (name, image) VALUES (:name, :image)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
}else{
    print_r("False");
}
?>