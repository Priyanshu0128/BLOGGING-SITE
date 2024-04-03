
<?php
session_start();
if(isset($_SESSION['id']))
{
  $id=$_SESSION['id'];
  $username=$_SESSION['username'];
  // echo $id;
  // echo $name;
}
 else{
//  echo "<script>window.location='login.php'</script>";
echo  "session expire pls login";

}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Create Blog !!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {

        background: #df9c15;
        overflow: scroll;
    }

    .my-5 {
        margin-bottom: 2rem !important;
    }

    .row {

        margin-top: 50px;
    }
</style>




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
                    <!-- <li class="nav-item">
                        <a class="nav-link active show-popup" aria-current="page" href="#">Log In</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <img src="user.png" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px;">
                        <ul class="dropdown-menu mainDropdown" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <li><a class="dropdown-item" href="home.html">Home</a></li> -->
                            <li><a class="dropdown-item" href="crblog.php">Create Blog</a></li>
                            <li><a class="dropdown-item" href="show.php">My Blogs</a></li>
                            <!-- <li><a class="dropdown-item" href="changePass.php">Setting</a></li> -->
                            <li><a class="dropdown-item" href="home.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    </head>

    <body>

        <section>

            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create Blog</h2>

                                <form action="" method="POST" enctype="multipart/form-data" name="form-data">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Title</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="title" />
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Description:</label>
                                        <textarea class="form-control" rows="5" id="comment" name="discription"></textarea>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="sel1" class="form-label">Select category (select one):</label>
                                        <select class="form-control" id="sel1" name="category">
                                           
                                            <option>Technology blogs</option>
                                            
                                            <option>Environment blogs</option>
                                            <option>Sports blogs</option>
                                            <option>Music blogs</option>

                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Select Image</label>
                                        <input type="file" id="form3Example4cg" class="form-control form-control-lg" name="image" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Select Date</label>
                                        <input type="date" id="form3Example4cg" class="form-control form-control-lg" name="date" />
                                    </div>
                                    <input type="hidden" name="user_id" value="<?php echo $id;?>">



                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit">Create Blog</button>
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

        
        <script>
          
        </script>
<?php
include "conn.php";
if(isset($_POST['submit']))
{
    $u_id= $_POST['user_id'];
  $title=$_POST['title'];
  $discription=$_POST['discription'];
  $category=$_POST['category'];
  $date= $_POST['date'];
 
  $image = $_FILES["image"];
  $image_name = $image["name"];
  $image_tmp_name = $image["tmp_name"];
 if($title=='')
 {
  echo "Enter Title";
 }
 elseif($discription=='') {
   echo "Enter Discription";
 }
 elseif ($category=='') {
   echo "Select Category";
   
 }
 elseif ($image=='') {
   echo "Select Image";
 }
 elseif ($date=='') {
   echo "Select date";
   
 }
 else
 {
    move_uploaded_file($image_tmp_name, "uploads/" . $image_name);
 $query="INSERT INTO blogname (user_id,title,discription,category,image,date) VALUES ('$u_id','$title','$discription','$category','$image_name','$date')";
 $res=mysqli_query($conn,$query) or die("query not run");

if($res):
echo "<script>alert ('Post Created successfully')</script>";
echo "<script>window.location='user.php'</script>";
else:
echo "<script>alert ('Post Creation  failed')</script>";
endif;
}
}
?>
    </body>

</html>