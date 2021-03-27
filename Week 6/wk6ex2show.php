<?php
    // Connect and select database
    $link = mysqli_connect("localhost", "root", "", "db1_21815369");

    $id = $_GET['id'];
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }
    
    $name = $_POST["txtname"];
    $phone_number = $_POST["txttelno"];
    $email = $_POST["txtemail"];

    $sql = "UPDATE test 
    SET  phone_number='$phone_number', email='$email'
    WHERE name='$id'";
    $result = mysqli_query($link, $sql);

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
?>
