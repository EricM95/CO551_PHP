<?php     
     $link = mysqli_connect("localhost", "root", "", "db2_21815369");
       $sql = "SELECT * FROM lotto;";
       $result = mysqli_query($link,$sql);

       echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
       echo "<br/>Select the lottery week ";
       echo "<select name='selweek' >";
       while($row = mysqli_fetch_array($result)) {
  	  echo "<option value='$row[wk]'>$row[wk]</option>";
       }
       echo "</select><br/>";
       echo "<input type='submit' value='Select' />";
       echo "</form>";
?>
