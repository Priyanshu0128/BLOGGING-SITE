<?php
$id= $_GET['pid'];
// echo $id;
include "conn.php";
$query="SELECT * FROM blogname where id='$id'";
$res=mysqli_query($conn,$query) or die("query not run");
$n=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog-Template</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width = device-width initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/show_style.css">
	<link rel="stylesheet" type="text/css" href="css/utility.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 -->
  <style>
  .img {
    width: 100%;
    height: 500px;
    overflow: hidden;
}
.card-img-top {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    height: 100%; 
}
  </style>
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="logo.png" class="logo" style="width: 100px;">
            <a class="nav-link active " aria-current="page" href="home.php" style="color:aliceblue"> Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="#">Log In</a>
                    </li>
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">

                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="myBlog.php">My Blogs</a></li>
                            <li><a class="dropdown-item" href="changePass.php">Setting</a></li>
                            <li><a class="dropdown-item" href="home.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
<div class="container my-5">
<?php while($row=mysqli_fetch_assoc($res)):?>
  <div class="card mb-3">
  <div class="image"><img class="card-img-top" src="uploads/<?php echo empty($row["image"])?'default.png':$row['image'] ?>" alt="Card image cap"></div>
  <div class="card-body">
  <h3 class="card-category  display-5 text-start text-secondary"><?php echo $row['category'] ?></h3>
	<h4 class="card-title display-5"><?php echo $row['title'] ?></h4>
    <p class="card-text"><?php echo $row["discription"]?></p>
    <div class="card-footer">
    <small class="text-muted">Date : <?php echo $row['date'] ?></small> 
   
	</div>
    <div><a href="delete.php?d_id=<?php echo $row["id"] ?>" class="btn btn-danger" role="button" >Delete Post</a>
    <a href="update.php?u_id=<?php echo $row["id"] ?>" class="btn btn-primary" role="button" >Update Post</a> </div>
  </div>
</div>
<?php

endwhile;

?>
</div>
</body>
</html>