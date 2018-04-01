<?php
	set_time_limit(120);
	include("bezier.class.php");

	$bez=new bezier($_POST["x0"], $_POST["y0"], $_POST["x1"], $_POST["y1"], $_POST["x2"], $_POST["y2"], $_POST["x3"], $_POST["y3"]);
	$bez->draw();	
?>