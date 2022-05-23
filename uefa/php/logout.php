<?php
	session_start();
	session_destroy();
	header("location: ../html/public/index.html");
?>