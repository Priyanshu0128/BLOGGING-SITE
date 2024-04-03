<?php 
include('conn.php');
$id=$_GET['d_id']; 
echo $id;

$query="delete from blogname where id=$id";
$res=mysqli_query($conn,$query);


if($res):
	echo "<script>alert ('post deleted successfully')</script>";
	echo "<script>window.location='show.php'</script>";
	
else:
	echo "<script>alert ('not deleted')</script>";
	echo "<script>window.location='show.php'</script>";

endif;
?>



