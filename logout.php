<?php
session_start();
if(isset($_SESSION['id']))
{

	session_destroy();
	echo "<script>window.location='home.php'</script>";
}



?>