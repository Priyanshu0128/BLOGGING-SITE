<?php
$uid = $_GET['u_id'];
include "conn.php";
$query = "SELECT * FROM blogname where id='$uid'";
$res = mysqli_query($conn, $query) or die("query not run");
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Blog !!!!!</title>
  <meta name="viewport" content="width = device-width initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" type="text/css" href="css/register_sty.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {

      background-color:#ff8700cc;
      overflow: scroll;
    }

    
    .my-5 {
      margin-bottom: 2rem !important;
    }

    .row {

      margin-top: 50px;
    }
  </style>                                                
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="logo.png" class="logo" style="width: 100px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="user.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">
                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <li><a class="dropdown-item" href="home.html">Home</a></li> -->
                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <!-- <li><a class="dropdown-item" href="changePass.php">Setting</a></li> -->
                            <!-- <li><a class="dropdown-item" href="home.php">Log Out</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
  <section>
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Update Blog</h2>

                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Title</label>
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="title" value="<?php echo $row['title']; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="comment">Description:</label>
                    <textarea class="form-control" rows="5" id="comment" name="discription"><?php echo $row['discription']; ?></textarea>
                  </div>
                  <div class="form-outline mb-4">
                    <label for="sel1" class="form-label">Select category (select one):</label>
                    <select class="form-control" id="sel1" name="category">
                     
                      <option value="Technology blogs" <?=$row['category'] == 'Technology blogs' ? 'selected' : '' ?>>Technology blogs</option>
                      <option value="Environment blogs" <?=$row['category'] == 'Environment blogs' ? 'selected' : '' ?>> Environment blogs</option>
                      <option value="Sports blogs" <?=$row['category'] == 'Sports blogs' ? 'selected' : '' ?>>Sports blogs</option>
                      <option value="Music blogs" <?=$row['category'] == 'Music blogs' ? 'selected' : '' ?>>Music blogs</option>
                    </select>
                  </div>

                  <div class="form-outline mb-4 row">
                    <div class="col-md-8">
                      <label class="form-label" for="form3Example4cg">Select Image</label>
                      <input type="file" id="form3Example4cg" class="form-control form-control-lg" name="image" />
                    </div>
                    <div class="col-md-4">
                      <img src="./uploads/<?php echo $row['image']; ?>" width="100" height="100">
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Select Date</label>
                    <input type="date" id="form3Example4cg" class="form-control form-control-lg" name="date" value="<?php echo$row['date']; ?>" />
                  </div>
                  <input type="hidden" name="u_id" value="<?php echo $uid; ?>">


                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Update Blog</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  </section>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

if (isset($_POST['submit'])) {

  $title=$_POST['title'];
  $discription=$_POST['discription'];
  $category=$_POST['category'];
  $image = $_FILES["image"];
  $image_name = $image["name"];
  $image_tmp_name = $image["tmp_name"];
  $date = $_POST['date'];
  $u_id= $_POST['u_id'];
//.?

  // die();

  if ($image == '') {
    $query = "UPDATE blogname SET title='$title',discription='$discription',category='$category',date='$date' WHERE id= '$u_id'";
    $res = mysqli_query($conn, $query) or die("query not run");
    if ($res) :
      echo "<script>alert ('Post Updated successfully')</script>";
      echo "<script>window.location='show.php'</script>";
    else :
      echo "<script>alert ('Post Updation  failed')</script>";
    endif;
  } else {
  
$query = "UPDATE blogname SET title='$title',discription='$discription',category='$category',image='$image_name',date='$date' WHERE id= '$u_id'";
    $res = mysqli_query($conn, $query) or die("query not run");

    if ($res) :
      echo "<script>alert ('Post Updated successfully')</script>";
      echo "<script>window.location='show.php'</script>";
    else :
      echo "<script>alert ('Post Updation  failed')</script>";

    endif;
  }
}

?>