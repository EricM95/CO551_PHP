<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(13000,20) . " tax";
	html_footer();
?>
