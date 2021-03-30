<?php
  
  $link = mysqli_connect("localhost", "root","", "db2_21815369");
  if (!$link) 
  {
  die("Connection failed: " . mysqli_connect_error());
  }

$sql = "SELECT id FROM monster";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close($link);
?>
