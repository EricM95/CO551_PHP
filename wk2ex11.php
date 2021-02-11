<?php
    $mymarks["CO450"] = 72;
    $mymarks["CO451"] = 79;
    $mymarks["CO452"] = 61;
    $mymarks["CO453"] = 66;
    $mymarks["CO456"] = 58;
    $mymarks["CO457"] = 76;

    $total = 0;
  /*  for($count = 0; $count < 6; $count++)
    {
        echo "$count $mymarks[$count]";
    } */

    while(list($index,$value) = each($mymarks))
    {
        echo "Module code is  $index  and the grade is $value <br/>";
        $total = $total + $mymarks[$index];
    $average = $total / 6;
    }

  //  $total = $total + $mymarks[$index];
  //  $average = $total / 6;

    echo "My average grade is  $average";
?>