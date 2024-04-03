

<?php
$id = $_GET['pid'];
include "conn.php";
$query = "SELECT * FROM blogname where id=$id";
$res = mysqli_query($conn, $query) or die("query not run");
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
  
  <!-- <link rel="stylesheet" type="text/css" href="css/show_style.css">
  <link rel="stylesheet" type="text/css" href="css/utility.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/readcard_style.css"> -->
</head>
<style>
 
    .img-size{
 width: 100%;
 object-fit:cover;
 border: 2px solid black;
        }
        body{
          background-color:#ff9900;
        }
        
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="logo.png" class="logo" style="width: 100px;">
            <!-- <a class="nav-link active " aria-current="page" href="home.php" style="color:aliceblue"> Home</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="#">Log In</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">

                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">

                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <li><a class="dropdown-item" href="changePass.php">Setting</a></li>
                            <li><a class="dropdown-item" href="home.php">Log Out</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
 
  <div class="container-fluid my-3">
    <div class="row">
      <div class="col-sm-7 ">
        <div class="card mb-3">
          <div class="img"><img class="card-img-top img-size " src="uploads/<?php echo  empty($row["image"]) ? 'default.png' : $row['image'] ?>" alt="Card image cap"></div>
          <div class="card-body">
            <h3 class="card-category "><?php echo $row['category'] ?></h3>
            <h4 class="card-title "><?php echo $row['title'] ?></h4>
            <div class="card-text"><?php echo $row["discription"] ?></div>
            <p class="card-text mt-3"><small class="text-muted"><?php echo $row["date"]; ?></small></p>
          </div>
        </div>
      </div>
      <?php
      $query1 = "SELECT * FROM blogname where category='$category'ORDER BY date DESC LIMIT 5 ";
      $res1 = mysqli_query($conn, $query1) or die("query not run");
      $n = mysqli_num_rows($res1);
      ?>
      <div class="col-sm-5 sidenav">
        <h5 class="heading">POPULAR ARTICLES</h5>
        <div class="row mt-3">
          <?php while ($row1 = mysqli_fetch_assoc($res1)) : ?>
            <div class="col col-md-4">
                <a href="./readc2.php?pid=<?php echo $row1['id'] ?>">
                <img class="card-img-top  image " src="uploads/<?= !empty($row1["image"]) ? $row1["image"] : 'default.png' ?>" alt="Card image cap"></div>
            <div class=" col col-md-8 card-body">
              <h1 class=" h3 card-category  " style="color:black"><?php echo $row1['category'] ?></h1>
              <h4 class="card-title " style="color:black"><?php echo $row1['title'] ?></h4>
              <p class="card-text" style="color:black"><?php echo $row1["discription"] ?></p>
              <p class="card-text" style="color:black"><small class="text-muted"><?php echo $row1["date"]; ?></small></p>
              </a>
            </div>
            <!-- <hr> -->
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</body>