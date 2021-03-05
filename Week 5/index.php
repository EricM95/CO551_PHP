<?php include("class_lib.php"); ?>
<?php 
    $eric = new person();
    $eddie = new person();

    $eric->set_name("Eric Man");
    $eddie->set_name("Eddie Pop");

    echo "Eric's full name : " . $eric->get_name();
    echo "Eddies's full name : " . $eddie->get_name();
?>