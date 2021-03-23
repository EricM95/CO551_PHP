<?php
    // Connect and select database
    $link = mysqli_connect("localhost", "root", "", "db1_21815369");

    $sql = "UPDATE test (name, phone_number, email)
    VALUES ('$_POST[txtname]', '$_POST[txttelno]', '$_POST[txtemail]')";
    $result = mysqli_query($link, $sql);
?>
