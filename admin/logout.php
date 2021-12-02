<?php
session_start();
//session_destroy();
unset($_SESSION['email']);

	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php?logout='1'");
//echo "<script>window.location='index.php'</script>";

?>
