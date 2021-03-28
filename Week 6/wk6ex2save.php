<?php
    // Connect and select database
    $link = mysqli_connect("127.0.0.1", "root", "", "db1_21815369");
    $name = $_POST["txtname"];
    $phone_number = $_POST["txttelno"];
    $email = $_POST["txtemail"];

    $sql = "UPDATE test 
    SET  phone_number='$phone_number'";

    $result = mysqli_query($link, $sql);

    $sql = "UPDATE test SET email='$email'";

    $result = mysqli_query($link, $sql);
    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }

    echo "<a href='wk6ex2.php'/>Home </a>";

    mysqli_close($link);
?>
