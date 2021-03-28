<?php
session_start();
$name=$_SESSION['nameID'];
$link = $link = mysqli_connect("localhost", "root", "", "db1_21815369");
$id=$_REQUEST['id'];

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM test WHERE name=$name";

//$result = mysqli_query($link,$sql);

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
echo "<a href='wk6ex2.php'/>Home </a>";

mysqli_close($link);
?>