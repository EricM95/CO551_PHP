<?php
    // Connect and select database
    $link = mysqli_connect("localhost", "root", "", "db1_21815369");

    $sql = "UPDATE test 
    SET ('$_POST[txtname]', '$_POST[txttelno]', '$_POST[txtemail]')
    WHERE name, phone_number, email";
    $result = mysqli_query($link, $sql);

    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($link);
      }
?>
