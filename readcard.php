
<?php
session_start();
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  echo "<script>window.location='user.php'</script>";
}
//  else{
// 	echo "session expire pls login";
//  }
?>
<?php
$id = $_GET['pid'];
// echo $id;
include "conn.php";
$query = "SELECT * FROM blogname where id='$id'";
$res = mysqli_query($conn, $query) or die("query not run");
$n = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
$category = $row['category'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog-Template</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   -->
  <style>
   
   .img-size{
 width: 100%;

 object-fit:cover;
 
 border: 2px solid black;
        }
        body{
          background-color:#ff9900;
          /* background-image: url("https://images.pexels.com/photos/129731/pexels-photo-129731.jpeg?auto=compress&cs=tinysrgb&w=800"); */
        }
        #m1{
        font-size: 22px;
       }
       #m1:hover{
        
        background-color:#ff7d00ae;
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
                        <a class="nav-link active show-popup" id="m1" aria-current="page" href="log.php" ><b>Log In</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show-popup" id="m1" aria-current="page" href="regi.php"><B>Register</B></a>
                        
                    </li>
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; display:none;">

                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <li><a class="dropdown-item" href="changePass.php">Setting</a></li>
                            <li><a class="dropdown-item" href="home.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container-fluid my-3" >
    <div class="row">
      <div class="col-sm-7 ">
        <div class="card mb-3">
          <div class="img"><img class="card-img-top img-size" src="uploads/<?php echo !empty($row["image"])?$row['image']:'default.png' ?>" alt="Card image cap"></div>
          <div class="card-body">
            <h3 class="card-category " style="color:black"><?php echo $row['category'] ?></h3>
            <h4 class="card-title " style="color:black"></h4><?php echo $row['title'] ?></h4>
            <div class="card-text" style="color:black"><?php echo $row["discription"] ?></div>
            <p class="card-text mt-3"><small class="text-muted"><?php echo $row["date"]; ?></small></p>

          </div>

        </div>
      </div>
      <!--  side div  -->
      <?php
      $query1 = "SELECT * FROM blogname where category='$category' ORDER BY date DESC LIMIT 5 ";
      $res1 = mysqli_query($conn, $query1) or die("query not run");
      $n = mysqli_num_rows($res1);
      ?>
      <div class="col-sm-5 sidenav">
        <h5 class=" heading">POPULAR ARTICLES</h5>
        <div class="row mt-3">
          <?php while ($row1 = mysqli_fetch_assoc($res1)) : ?>
            <div class="col col-md-4"><a href="./readcard.php?pid=<?php echo $row1['id'] ?>"><img class="card-img-top  image  " src="uploads/<?php echo !empty($row1["image"])?$row1["image"]:'default.png' ?>" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h5 card-category " style="color:black"><?php echo $row1['category'] ?></h1>
              <h4 class="card-title h5" style="color:black"><?php echo $row1['title'] ?></h4>
              <p class="card-text" style="color:black"><?php echo $row1["discription"] ?></p>
              <p class="card-text"  style="color:black"><small class="text-muted"><?php echo $row1["date"]; ?></small></p>
              </a>
            </div>
            <!-- <hr> -->
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>